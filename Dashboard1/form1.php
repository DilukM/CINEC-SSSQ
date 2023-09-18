<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinec SSSQ</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"> -->

    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" /> 

  

   

</head>
<body>
    <div class="container">

        <aside>
            <div class="toggle">
              <div class="logo">
                <img src="images/logo.png" />
                <h2>CINEC<span class="danger">SSSQ</span></h2>
              </div>
              <div class="close" id="close-btn">
                <span class="material-icons-sharp"> close </span>
              </div>
            </div>
    
            <div class="sidebar">
              <a href="index.html" class="active">
                <span class="material-icons-sharp"> home </span>
                <h3>Home</h3>
              </a>
              <a href="form1.html">
                <span class="material-icons-sharp"> view_list </span>
                <h3>Forms</h3>
              </a>
              <a href="course.html">
                <span class="material-icons-sharp"> school </span>
                <h3>Courses</h3>
              </a>
  

              <a href="batches1.html">
                <span class="material-icons-sharp"> grade </span>
                <h3>Batches</h3>
              </a>
    
              <a href="lectures.html">
                <span class="material-icons-sharp"> person </span>
                <h3>Lecturers</h3>
              </a>
    
              <a href="account1.html">
                <span class="material-icons-sharp"> account_circle </span>
                <h3>Account Details</h3>
              </a>
    
              <a href="report.html">
                <span class="material-icons-sharp"> report_gmailerrorred </span>
                <h3>Reports</h3>
              </a>
    
              <a href="settings.html">
                <span class="material-icons-sharp"> settings </span>
                <h3>Settings</h3>
              </a>
              
              <a href="logout.html">
                <span class="material-icons-sharp"> logout </span>
                <h3>Logout</h3>
              </a>

            </div>
          </aside>
          <!-- end of aside -->

    <main>

            <h1>Forms</h1>

            <div class="analyse">

      <?php
      // Step 3: Database Connection
      include('../db_connection.php');
      
      // Step 4: Fetch Data
      $sql = "SELECT * FROM request_form";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        // echo '<form >';
        $sectionNumber = 1;
      while ($row = mysqli_fetch_assoc($result) ) {
          
         
        echo'   <div class="forms">
        <div class="status">
          
            <div class="info">
              <h2>'.$row['batch_no'] .'_'. $row['semester'].'</h2>
              <label for="link">Link:</label>
              <div class="link_placeholder">
              <input type="text" class="link" id="link'.$sectionNumber.'" name="link'.$sectionNumber.'" value="http://localhost/CINEC-SSSQ/Student%20Form/StudentForm.php?id='.$row['request_id'].'">
              
              <button class="button" id="copyButton'.$sectionNumber.'">Copy</button></div>
              <h2>progresss: </h2><input type="text" id="progresss'.$sectionNumber.'" name="progresss'.$sectionNumber.'">
            </div>
          
        </div>
      </div>';

      echo'
      <script>
       document.addEventListener("DOMContentLoaded", function () {
        const copyButton'.$sectionNumber.' = document.getElementById("copyButton'.$sectionNumber.'");
        const linkInput'.$sectionNumber.' = document.getElementById("link'.$sectionNumber.'");
    
        copyButton'.$sectionNumber.'.addEventListener("click", function () {
          // Select the text inside the input element
          linkInput'.$sectionNumber.'.select();
          linkInput'.$sectionNumber.'.setSelectionRange(0, 99999); // For mobile devices
    
          // Copy the selected text to the clipboard
          document.execCommand("copy");
    
          // Deselect the input field
          linkInput'.$sectionNumber.'.blur();
    
          // Optionally, provide user feedback (e.g., change button text)
          copyButton'.$sectionNumber.'.textContent = "Copied!";
          setTimeout(function () {
            copyButton'.$sectionNumber.'.textContent = "Copy";
          }, 2000); // Reset button text after 2 seconds
        });
      });
        </script>
      ';
    }
        
        // Fetch the lecturer names associated with the request_id
        // $sql2 = "SELECT * FROM lecturer_names WHERE request_id = $userID";
        // $result2 = mysqli_query($conn, $sql2);
        
  
}
  // Step 8: Close Database Connection
  mysqli_close($conn);

?>
                
     </div>
  </main>
</div>

    
</body>
</html>