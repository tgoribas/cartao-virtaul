<?php
require "configApp.php";
?>
<!doctype html>
<html lang="en">
<head>
    <title>Cartão Virtual - <?php echo $title?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/css/style.css" rel="stylesheet" >
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

	<div class="section over-hide">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section text-center py-5 py-md-0">
                        <input class="flip_card" type="checkbox" id="flip_card" name="flip_card" style="display:none;"/>
						<div class="card-3d-wrap mx-auto ">
							<div class="card-3d-wrapper ">
								<div class="card-front shadow">
                                    <div class="col-12 bg-front">
                                        <label class="btn btn-flip text-white" for="flip_card"><i class="fas fa-share"></i></label>
                                        <img src="assets/images/logo-travessuras-chocolates.png" class="logo" alt="Logo Travessuras">
                                    </div>
									<div class="pricing-wrap" style="margin-top: 150px;">
                                        <div class="row px-4">
                                            <div class="col-4 text-center">
                                                <a href="" class="btn btn-travessuras"><i class="<?php echo $btn1['icon']?>"></i></a>
                                                <br><a href="<?php echo $btn1['link']?>"><label class="label-btn cursor-pointer"><?php echo $btn1['title']?></label></a>
                                            </div>
                                            <div class="col-4 text-center">
                                                <a href="" class="btn btn-travessuras"><i class="<?php echo $btn2['icon']?>"></i></a>
                                                <br><a href="<?php echo $btn2['link']?>"><label class="label-btn cursor-pointer"><?php echo $btn2['title']?></label></a>
                                            </div>
                                            <div class="col-4 text-center">
                                                <a href="" class="btn btn-travessuras"><i class="<?php echo $btn3['icon']?>"></i></a>
                                                <br><a href="<?php echo $btn3['link']?>"><label class="label-btn cursor-pointer"><?php echo $btn3['title']?></label></a>
                                            </div>
                                        </div>
                                        <div class="row mt-3 px-4">
                                            <div class="col-4 text-center">
                                                <a href="" class="btn btn-travessuras"><i class="<?php echo $btn4['icon']?>"></i></a>
                                                <br><a href="<?php echo $btn4['link']?>"><label class="label-btn cursor-pointer"><?php echo $btn4['title']?></label></a>
                                            </div>
                                            <div class="col-4 text-center">
                                                <a href="" class="btn btn-travessuras"><i class="<?php echo $btn5['icon']?>"></i></a>
                                                <br><a href="<?php echo $btn5['link']?>"><label class="label-btn cursor-pointer"><?php echo $btn5['title']?></label></a>
                                            </div>
                                            <div class="col-4 text-center">
                                                <a href="" class="btn btn-travessuras"><i class="<?php echo $btn6['icon']?>"></i></a>
                                                <br><a href="<?php echo $btn6['link']?>"><label class="label-btn cursor-pointer"><?php echo $btn6['title']?></label></a>
                                            </div>
                                        </div>
			      					</div>
			      				</div>
								<div class="card-back bg-back">
                                    <div class="col-12 ">
                                        <label class="btn btn-flip text-white" for="flip_card"><i class="fas fa-share fa-flip-horizontal"></i></label>
                                        <img src="assets/images/qrcode.gif" class="qrcode mt-4" alt="Logo Travessuras">
                                        <p class="text-color-2 mt-2"><?php echo $title?></p>
                                    </div>
                                    <div class="pricing-wrap" style="margin-top: 150px;">
                                        <div class="col-12 px-3">
                                            <div class="d-grid gap-3">
                                            <button class="btn btn-transparent text-start" type="button" onclick="clipboardInput('input_copy')" ><i class="fas fa-copy"></i> Copiar</button>
                                            <button class="btn btn-transparent text-start" type="button" onclick="window.open('assets/files/<?php echo $vcf?>')"><i class="fas fa-user-plus"></i> Baixar Contato</button>
                                            <button class="btn btn-transparent text-start" type="button"data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-share-alt"></i> Compartilhar</button>
                                            <input type="hidden" name="input_copy" id="input_copy" value="<?php echo $urlCartao?>">
                                            </div>
                                        </div>
 			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Compartilhar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <button type="button" class="btn btn-facebook rounded-3" onclick="share('facebook')" ><i class="fab fa-facebook-f"></i></button>
                <button type="button" class="btn btn-whatsapp rounded-3" onclick="share('whatsapp')" ><i class="fab fa-whatsapp"></i></button>
                <button type="button" class="btn btn-telegram rounded-3" onclick="share('telegram')" ><i class="fab fa-telegram"></i></button>
                <button type="button" class="btn btn-twitter rounded-3" onclick="share('twitter')" ><i class="fab fa-twitter"></i></button>
            </div>
        </div>
        </div>
    </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script>
    /**Clipboard */
    function clipboardInput(input) {
        /* Get the text field */
        var copyText = document.getElementById(input);
        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value).then(function() {
            console.log('Copy');
        }, function() {
            /* Clipboard Error */
            console.log('Error');
        });
    }

    function share(type) {
        url = "<?php echo $urlCartao?>";

        switch (type) {
            case "facebook":
                url_share = "https://www.facebook.com/sharer/sharer.php?u=" + url;
                break;
            case "whatsapp":
                url_share = "https://api.whatsapp.com/send?text=" + url;
                break;
            case "telegram":
                url_share = "https://telegram.me/share/url?url=" + url;
                break;
            case "twitter":
                url_share = "https://twitter.com/intent/tweet?url=" + url;
                break;
        }
        window.open(url_share, "Compartilhar", "width=500,height=450");
    }
    </script>
</body>
</html>