<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"> 
        <title>Authorization</title>
  </head>
  <body>
    <div class="container">
      <div class="row mt-5" >
          <div class="col-6 offset-3 mt-5">
            <div class="card ">
                <div class="card-header">
                <center><h2>Mini-DL.iitu.kz</h2></center>
                </div>
                <div class="card-body">
                    <div class="col-8 offset-2">
						<?php
							if($UID) //если переменной нет, выводим форму
						{ ?>
                    <form action="/" method="post">
                        <div class="form-group">
                            <input  type="text" class="form-control" placeholder="Enter login">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter password">
                        </div>
                        
                            <input type="checkbox">
                            <label>Remember me</label>
                        
                        <div class="form-group">
							<input type="hidden" name="log_in">
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </form>
						<?php
						}
						?>
                        </div>
                </div>
            </div>
           </div>
          
         
          
        </div>
      </div>
      
 <div class="footer">
          <center><h3>Вы не вошли в систему</h3></center>
          </div>
  </body>
    
  </html>