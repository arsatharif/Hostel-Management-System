<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<link rel="stylesheet" href="..\css\applyleave.css">
<body>
  <div class="container">
    <div class="title">Attendance </div>
    <div class="content">
      <form action="connect1.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Enter your name" id="name" name="Name" required>
          </div>
          <div class="input-box">
            <span class="details">Reg No</span>
            <input type="text" placeholder="Enter your regno" id="regno" name="RegNo" required>
          </div>
          <div class="input-box">
            <span class="details">Block Name</span>
            <input type="text" placeholder="Enter your block name" id="block" name="BlockName" required>
          </div>
          <div class="input-box">
            <span class="details">Room No</span>
            <input type="number" placeholder="Enter your room "  id="roomno" name="RoomNo" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" name="date" id="date" placeholder="Enter from date " required>
          </div>
          <div class="input-box">
            <span class="details">Phone No</span>
            <input type="textarea" name="phoneno" id="phoneno" placeholder="your Phone No"  required>
          </div>
        </div>

        <div class="button">
          <input type="button" value="Go Back" onclick="goback()">
          <input type="submit" name="submit" style="margin-left:85px;" >
        </div>
      </form>
     
    </div>
  </div>

</body>
</html>