<?php

namespace App\Controllers;

class Payment extends BaseController
{
    public function index()
    {
        echo view('payment/header');
        echo view('payment/home');
    }

    public function Pay()
    {
        // post("", headers = {"": "PVKEY", "": "", "": ""}, json = { "email": "fawazming@gmail.com", "name": "Fawaz Ibraheem", "phoneNumber": "07036511151", "bankcode": ["120001"],"account_type": "DYNAMIC", "businessid": "B259B99E0B0F41EE874B9549C40697F8" })
        $incoming = $this->request->getPost();
        $client = \Config\Services::curlrequest();

        $response = $client->request('POST', 'https://api.payvessel.com/api/external/request/customerReservedAccount/', 
            [
                'headers' => [
                    'api-key' => $_ENV['PVKEY'],
                    'api-secret'     => 'Bearer '.$_ENV['PVSECRET'],
                    'Content-Type'      => 'application/json',
                ],
                'json' => [
                    'email' => $incoming['email'],
                    'name' => $incoming['fname'],
                    'phoneNumber' => $incoming['phone'],
                    'bankcode' => ['120001'],
                    'account_type' => 'DYNAMIC',
                    'businessid' => 'B259B99E0B0F41EE874B9549C40697F8',
                ],
                'http_errors' => false
            ]
            );
        $status = $response->getStatusCode();
        if($status < 400){
            $data = [
            'payment' => json_decode($response->getBody())->banks,
            'user' => $incoming
        ];
        // dd($data);
        echo view('payment/header');
        echo view('payment/home', $data);
    } else{
        echo "Please Check back later";
    }
        
    }


    public function blog()
    {
        $BLOGID = $_ENV['BLOGGER_ID'];
        $client = \Config\Services::curlrequest();

        $response = $client->request('GET', 'https://www.googleapis.com/blogger/v3/blogs/'.$BLOGID.'/posts?key='.$_ENV['BLOGGER']);

        $data = [ 'blogs' => json_decode($response->getBody())->items
        ];

        dd($data);
        // echo view('header');
        // echo view('blog', $data);
        // echo view('footer');
    }

    public function gallery()
    {
        dd($this->googlePhotos());    
    }

    public function tests()
    {
        // $Variable = new \App\Models\Variable();

        // $res = $this->trials();
        // $NEWetag = json_decode($res)->etag;
        // $OLDetag = json_decode($Variable->where('id','1')->find()[0]['value'])->etag;
        // if($NEWetag == $OLDetag){
        //     echo "No Need to UPDATE";
        // }else{
        //     echo "Please UPDATE me";
        //     $Variable->update(1, ['key'=>'pages', 'value'=>$res]);
        // }
        // $db = db_connect();
        // $db->query('CREATE TABLE variable (id INTEGER PRIMARY KEY, key TEXT, value TEXT)');
        // $Variable->insert(['id'=>1,'key'=>'pages', 'value'=>$res]);
        // $Variable->delete('2');
        // dd($Variable->findAll());

        // To cache and Trigger, create a google APP script to call a webhook after etag has changed
    }


    public function blogD($id)
    {
        $BLOGID = $_ENV['BLOGGER_ID'];
        $client = \Config\Services::curlrequest();

        $response = $client->request('GET', 'https://www.googleapis.com/blogger/v3/blogs/'.$BLOGID.'/posts/'.$id.'?key='.$_ENV['BLOGGER']);

        $data = [ 'blog' => json_decode($response->getBody())
        ];

        dd($data);
        // echo view('header');
        // echo view('blogSingle', $data);
        // echo view('footer');
    }

    public function pages($pg='')
    {
        switch ($pg) {
            case 'about':
                $jsonld = '';
                echo view('main/header', ['title'=>"About PHF Ogun", 'desc'=>"Learn more about us", 'jsonld'=>$jsonld]);
                echo view('main/pages', $this->loadPage('7775276068026621191'));
                echo view('main/footer');
                break;
            
            default:
               echo "404 Not found";
                break;
        }
    }

    private function googlePhotos($token='Puqwxek1sBVpmvud9')
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'https://galleria.sgm.ng/'.$token);

        $res =  json_decode($response->getBody());
        $ret = [];

        foreach ($res as $key => $gal) {
            if($key == 0){
            }else{
                // $ret[$key] = $gal;
                array_push($ret, $gal);
            }
        }

        return $ret;
    }

    private function loadPage($pageID)
    {
        $url = 'https://www.googleapis.com/blogger/v3/blogs/'.$_ENV['BLOGGER_ID'].'/pages/'.$pageID.'?key='.$_ENV['BLOGGER'];
        $res = $this->loadContent($url);
        return ['title'=>$res->title, 'content'=>$res->content];
    }

    private function loadPostASPage($path)
    {
        $url = 'https://www.googleapis.com/blogger/v3/blogs/'.$_ENV['BLOGGER_ID'].'/posts/bypath?path=/'.$path.'&key='.$_ENV['BLOGGER'];
        $res = $this->loadContent($url);
        return ['title'=>$res->title, 'content'=>$res->content];
    }

    private function loadContent($url)
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', $url);
        // dd($response->getBody());
        return json_decode($response->getBody());
    }

    private function trials()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'https://www.googleapis.com/blogger/v3/blogs/'.$_ENV['BLOGGER_ID'].'/pages/'.'?key='.$_ENV['BLOGGER']);
        return $response->getBody();
    }
}
