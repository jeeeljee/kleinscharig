<!doctype html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
		<title>Afspraak maken</title>
		<meta name="description" content="Maak je afspraak heel makkelijk online.">	
	    
	    <?php include'header.php' ?>
	    
        <div class="main-container">
 	        <section class="text-center space--md">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-md-8">
                            <h1>Maak je afspraak</h1>
                            <p class="lead"> Ben je <u>nieuw</u> bij Kleinscharig? Dan kan je terecht bij <u>Angelique</u>. Momenteel is er bij Barbara geen plek meer. </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="switchable switchable--switch text-justify">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5"> 
		       				<script language="JavaScript">
							<!--
							
							function random_imglink(){
							var myimages=new Array()
							myimages[1]="img/afspraak/kleinscharig-kapsalon-amersfoort-barbara.jpg"														
							myimages[2]="img/afspraak/kleinscharig-kapsalon-amersfoort-barbara2.jpg"														
							myimages[3]="img/afspraak/kleinscharig-kapsalon-amersfoort-angelique.jpg"
							myimages[4]="img/afspraak/kleinscharig-kapsalon-amersfoort-angelique2.jpg"
																																	
							var ry=Math.floor(Math.random()*myimages.length)
							if (ry==0)
							ry=1
							document.write('<img alt="afspraak kleinscharig" class="border--round box-shadow-wide" src="'+myimages[ry]+'" border=0>')
							}
							random_imglink()
							//-->
							</script>
                        </div>	
                        <div class="col-sm-6">
							<iframe src="//kleinscharig.salonized.com/bookings/new?layout=embed" style="height:620px;" class="salonized"></iframe>	
                        </div>

                    </div>
                </div>
            </section>
        </div>	        
	        
        
   	    <?php include'footer.php' ?>
        
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scripts.js"></script>

    </body>

</html>