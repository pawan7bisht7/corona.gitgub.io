<style type="text/css">

html{
	scroll-behavior: smooth;
}

*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli', sans-serif; }

.row{
	margin-left: 0!important;
	margin-right: 0!important;
}

.nav_style{
	background-color: #a29bfe!important;
}

.nav_style a{
	color: white;
}


/*////////////// main header \\\\\\\\\\\\\\\*/

.nav-link:hover{
	transition: all 0.4s linear;
	transform: scale(1.1);
	box-shadow: 0 0 30px rgba(0,0,0,.3);
}

.main_header{
	height: 450px;
	width: 100%;
}

.rightside h1{
	font-size: 3rem;
}

.corona_rot img{
	animation: gocorona 4s linear infinite;
}

@keyframes gocorona{
	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }
}

.leftside img{ animation: heartbeat 5s linear infinite; }

@keyframes heartbeat{
	0%
	{
		transform: scale( .75 ) ;
	}
	20%
	{
		transform: scale( 1 ) ;
	}
	40%
	{
		transform: scale( .75 ) ;
	}
	60%
	{
		transform: scale( 1 ) ;
	}
	80%
	{
		transform: scale( .75 ) ;
	}
	100%
	{
		transform: scale( .75 ) ;
	}
}

/******************minister image***********************/

.img_effect .row .img-responsive:hover{
	transition: all 0.5s linear;
	transform: scale(1.12);
	box-shadow: 0 0 20px rgba(0,0,0,.1);

}


/************* corana update **************/

.corona_update{
	margin: 0 0 30px 0;
	 margin-top: 2.5rem;
}   


.corona_update h1{
	font-size: 2.5rem; 
	text-align: center;
}

/*************about section*****************/

.sub_section{
	background-color: #fbfaf8;
}


/*----------footer-------------*/

.footer-bottom {
	background: #343a40;
	color: white;
	height: 150px;
	width: 100%;
	text-align: center;
	position: absolute;
	padding-top: 20px;
}

.centerdiv{
	display: flex;
	align-items: center;
	padding-bottom: 20px;
	justify-content: center;
}
.centerdiv a{
	height: 50px;
	width: 50px;
	background-color: #00A8FF;
	border-radius: 60px;
	text-align: center;
	margin: 5px;
	line-height: 60px;
	transition: all 0.1s linear;
}

.fa-facebook{
	color: #343a40;
}

.fa-instagram{
	color: #343a40;
}

.fa-twitter{
	color: #343a40;
}

.fa-youtube{
	color: #343a40;
}

.fa-linkedin{
	color: #343a40;
}



.centerdiv a:hover{
	transform: scale(1.2);
}

/***************top scroll*************/

#myBtn {
	position: fixed; /*Fixed & sticky position*/
	bottom: 30px;  /*Place the Button at the bottom of the page*/
	right: 40px;  /*Place the buttom 30px from the right*/
	z-index: 99;  /*make sure it does not overlap*/
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}

#myBtn:hover {
	background: #606060;	/* Add a dark-gray background or hover*/
}

/*******responsive*********/

@media(max-width:768px){
	.main_header{ height: 700px; text-align: center; }

	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;

	}
	.count_style{
		display: inline!important;
	}
	.count_style p{
		text-align: center;
	}
	.count_style h1{
		text-align: center;
	}

}

.about_respons{
	padding-top: 40px;
	transition: all 0.3s linear;
}

.about_respons:hover{
	transform: scale(1.02);
	box-shadow: 0 0 40px rgba(0,0,0,.5);
}

.count:hover{
	transition: all 0.2s linear;
	transform: scale(1.4);
	box-shadow: 0 0 0 rgba(0,0,0,1);
}


</style>