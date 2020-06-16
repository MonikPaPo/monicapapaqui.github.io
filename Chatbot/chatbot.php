<?php include "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prototipo ChatBot</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<link rel="stylesheet" type="text/css" href="css\bootstrap\bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<script src="https://kit.fontawesome.com/1207f922ec.js" crossorigin="anonymous"></script>
</head>
<body>
	
		<section class="chatbot">
			<button class="open-button" onclick="openForm()"><i class="far fa-comments"></i></button>
			<div class="chat__chatbot" id="myForm" style="overflow-y: auto;">
				<section class="chat_chatbot_barra">
					 <div class="titulo">
					 	<h5 style="color: white;">Chat</h5>
					 </div>
					 <button class="cerrar closed-button" onclick="closeForm()">X</button>
					 <button class="mini closed-button" onclick="closeForm()">_</button>
				</section>
				<span id="ref">	
					<div class="container__chatbot">

						<h4>Mensajes</h4>
						<?php 
						$query="SELECT * FROM chats ORDER BY date DESC";
						$res=mysqli_query($conn,$query);
						while ($data=mysqli_fetch_array($res)) {
							$user=$data['user'];
							$chatbot=$data['chatbot'];
							$date=$data['date'];
						 ?>
						 <div id="chat" style="overflow-y:auto;" onmouseover="parar=1" onmouseout="parar=0">
							<div class="container1" style="margin-right:0px;">
							    <p id="message"><?php echo $user;?></p>
							    <span class="time-right"><?php echo $date;?></span>
							</div>

							<div class="container1 darker" style="margin-left:0px;">
							    <p><?php echo $chatbot;?></p>
							    <span class="time-left"><?php echo $date;?></span>
							</div>
						</div>
						
			            <?php } ?>
						<div class="sticky">
							<div class="row">
							    <div class="col-md-12">
							        <div class="input-group mb-3">
							          <input type="text" class="form-control" id="msg">
								            <div class="input-group-append">
								                <button class="btn btn-success" type="button" onclick="send()">Enviar
								                </button>
								            </div>
							        </div>
							    </div>
							</div>
						</div>
					</div>
				</span>

			</div>		
		</section>

	<script>
		function openForm() {
		  document.getElementById("myForm").style.display = "block";
		}

		function closeForm() {
		  document.getElementById("myForm").style.display = "none";
		}
	</script>
	<script type="text/javascript">
		function send(){
			var text=$('#msg').val().toLowerCase();

			$.ajax({
				type:"post",
				url:"mysearch.php",
				data:{text:text},
				success:function(data){
					$('#ref').load(' #ref');

				}
				
			});
		}

	onload=function(){
    setInterval(function(){if(window.parar)return;document.getElementById('chat').scrollTop=document.getElementById('chat')});
     }	
	</script>	

	
	
</body>
</html>