<body>
	<main class="bg-white rounded-lg overflow-hidden shadow w-72 md:w-96 flex flex-col" id="bankDetails">
		<div class="w-full px-12 py-1.5 bg-blue-600 justify-center items-center inline-flex">
			<div class="text-center text-white text-xs font-medium lg:text-lg  leading-tight">Account Details Expires in 30 Minutes</div>
		</div>
			<p class="px-4 pt-4 text-xs md:text-base">Dear, <?=$user['fname']?> kindly make a transfer of ₦<?=$user['amount']?> to the bank details below. You will receive a mail on <?=$user['email']?> once the payment has been verified.</p>

		<header class="flex px-4 pt-4 justify-between items-center">
			<div class="flex flex-col">
				<div class="text-zinc-900 text-base font-medium  leading-normal">9PSB </div>
				<div class="text-neutral-400 text-xs font-normal  leading-tight"><?=$payment->accountNumber?></div>
			</div>
			<div class="flex flex-col">
				<div class="text-right text-zinc-900 text-base font-medium  leading-normal">₦<?=$user['amount']?></div>
				<!-- <div class="text-right text-neutral-400 text-xs font-normal  leading-tight">#940512</div> -->
			</div>
		</header>
		<div class="my-2 px-4 justify-start items-start inline-flex">
			<div class="px-1.5 py-0.5 bg-blue-500 bg-opacity-10 rounded-md border border-blue-500 border-solid border-opacity-10 justify-start items-center gap-1 flex text-center text-blue-600 text-xs font-medium leading-tight">Rayyan Technologies</div>
		</div>
		<section class="mt-4 px-4 flex items-center justify-between">
			<div class="items-center gap-1 flex">
				<svg class="h-5 w-5 text-red-600" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M15.8333 2.50016H15V1.66683C15 1.2085 14.625 0.833496 14.1667 0.833496C13.7083 0.833496 13.3333 1.2085 13.3333 1.66683V2.50016H6.66667V1.66683C6.66667 1.2085 6.29167 0.833496 5.83333 0.833496C5.375 0.833496 5 1.2085 5 1.66683V2.50016H4.16667C3.24167 2.50016 2.50833 3.25016 2.50833 4.16683L2.5 15.8335C2.5 16.7502 3.24167 17.5002 4.16667 17.5002H15.8333C16.75 17.5002 17.5 16.7502 17.5 15.8335V4.16683C17.5 3.25016 16.75 2.50016 15.8333 2.50016ZM15 15.8335H5C4.54167 15.8335 4.16667 15.4585 4.16667 15.0002V6.66683H15.8333V15.0002C15.8333 15.4585 15.4583 15.8335 15 15.8335ZM6.66667 8.3335H9.16667C9.625 8.3335 10 8.7085 10 9.16683V11.6668C10 12.1252 9.625 12.5002 9.16667 12.5002H6.66667C6.20833 12.5002 5.83333 12.1252 5.83333 11.6668V9.16683C5.83333 8.7085 6.20833 8.3335 6.66667 8.3335Z" fill="currentColor" />
				</svg>
				<div class="text-red-600 text-xs font-normal leading-tight">Due Today</div>
				<div class="min-h-4 w-px mx-1 border-gray-100 border-dashed border-l h-full">
				</div>
			</div>
			<div class="items-center gap-1 flex">
				<div class="text-neutral-400 text-xs font-normal font-['Inter'] leading-tight"><?=$payment->expire_date?></div>
			</div>
		</section>
		<div class="w-full px-4 my-4">
			<div class="border-gray-100 border-dashed border h-px"></div>
		</div>
		<ul class="flex px-4 flex-col gap-4 mb-4">
			<li class="flex items-start justify-between">
				<div class="flex flex-col">
					<div class="text-zinc-600 text-base font-normal  leading-normal">Remo Bootcamp</div>
					<div class="text-neutral-400 text-xs font-normal  leading-tight">₦<?=$user['amount']?> to be paid</div>
				</div>
				<div class="text-right text-zinc-600 text-base font-normal  leading-normal">1</div>
			</li>
		</ul>
		<button id="madeTransfer" class="h-6 px-1.5 mx-4 mb-4 py-0.5 bg-blue-400 rounded-md justify-center items-center gap-1 inline-flex hover:bg-blue-600">
			<div class="text-center text-white text-xs md:text-base font-medium leading-tight">I have made the transfer</div>
		</button>
	</main>
	<main class="bg-white rounded-lg overflow-hidden shadow w-72 md:w-96 flex flex-col hidden" id="transferMade">
		<div class="w-full px-12 py-1.5 bg-blue-600 justify-center items-center inline-flex">
			<div class="text-center text-white text-xs font-medium lg:text-lg  leading-tight">Congratulations 🎊 </div>
		</div>
			<p class="px-4 pt-4 text-xs md:text-base text-center">You will receive a mail once the payment has been verified.<br><br><br></p>
		<a href="<?=base_url('/')?>" class="h-6 px-1.5 mx-4 mb-4 py-0.5 bg-blue-400 rounded-md justify-center items-center gap-1 inline-flex hover:bg-blue-600">
			<div class="text-center text-white text-xs md:text-base font-medium leading-tight">Okay, Take me back home</div>
		</a>
	</main>
	<script>
		let transferBTN = document.querySelector('#madeTransfer');
		transferBTN.addEventListener('click', (e)=>{
			document.querySelector('#bankDetails').classList.add('hidden');
			document.querySelector('#transferMade').classList.remove('hidden');
		})
	</script>
</body>
</html>