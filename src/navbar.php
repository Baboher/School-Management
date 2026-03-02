<?php

session_start();

if(!isset($_SESSION['mat'])){ // redirrige vers la page de connexion si non conecté
  header("Location: ../public/index.php");
}

?>

<ul class="flex bg-[#7ed957] w-full h-[50px] text-center font-bebas text-[22.5px]">
    <li class='hover:bg-[#20bf3e] h-[50px] basis-[175px] flex items-center justify-center uppercase'><a href=''>Dashboard</a></li>
	<li class='hover:bg-[#20bf3e] h-[50px] basis-[175px] flex items-center justify-center uppercase'><a href=''>Actualité</a></li>
	<li class='hover:bg-[#20bf3e] h-[50px] basis-[175px] flex items-center justify-center uppercase'><a href=''>Post-Peri Scolaire</a></li>
	<li class='hover:bg-[#20bf3e] h-[50px] basis-[175px] flex items-center justify-center uppercase'><a href=''>Sports</a></li>
	<li class='hover:bg-[#20bf3e] h-[50px] basis-[175px] flex items-center justify-center uppercase'><a href=''>Bibliothèque</a></li>
	<li class='hover:bg-[#20bf3e] h-[50px] ml-auto group static'><a href=''><img alt='account' src='img/account-icon-removebg-preview.png' class='size-[50px]'></a>
		<ul class="bg-[rgba(132,204,100,0.5)] text-[white] text-center hidden group-hover:block absolute w-[150px] ml-[-100px] hover:bg-[rgb(132,204,100)]">
			<li><a href='../src/logout.php'>Déconnexion</a></li>
		</ul>
	</li>
</ul>