<style>
#server{
	text-align: center;
	font-size: 14px;
	color: whitesmoke;
}

#server {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
}


@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
</style>




<div id='server' >
<?



$ip =  $_SERVER['REMOTE_ADDR'] ; 


if (!isset($id)){
	echo "seu ip é:";
	echo $ip;
}
?></div>