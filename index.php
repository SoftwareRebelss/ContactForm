<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contact form</title>
</head>
<body>
   
 <main>
     <div  class="container">
     <h2>Contact form</h2>
     
     <div class="error">
     <?php
     $error ="";
       echo $error;
       ?>
</div>
         <form method="POST" action="server.php">
             <input type="text" class="inputs" name="user_name" placeholder="username" required> 
             <input type="email" class="inputs" name="email" placeholder="email" required>
             <select name="choose" class="selection-c" required>
                 <option value="Query">Select</option>
                 <option value="Query">Query</option>
                 <option value="Feedback">Feedback</option>
                 <option value="Complaint">Complaint</option>
                 <option value="Other">Other</option>
             </select>
             <textarea name="comment" class="inputs" cols="20" rows="4" placeholder="comment"required ></textarea>
             <input type="submit" class="selection-c" name="submit_B" value="Comment">
         </form>
     </div>
 </main>
</body>
</html>