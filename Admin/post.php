<? include"header.php"?>
<style>

@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #fff;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}


</style>

<body>
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        }
        ?>
    <div class="content">
            <div class="animated fadeIn">
              <div class="col-md-12">
                 <div class="card">
                        
                         <div class="alert alert-warning" role="alert"> 
                        <h3 class="text-center p-2"><strong>&nbsp;|&nbsp; New Post &nbsp;|&nbsp; Update &nbsp;|&nbsp; </strong> <label class="text-danger">&nbsp; </label></h3> 
                        </div>
                            
                             <div class="col-md-6 offset-md-3">
                               
                              <form id="contact" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" method="post">
                                    <h3 class="text-center">POST</h3> 
                                <fieldset>
                                  <input name="name" placeholder="Your name" type="text" tabindex="1" required autofocus>
                                </fieldset>
                                <fieldset>
                                  <input name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
                                </fieldset>
                                <fieldset>
                                  <input name="phone" placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
                                </fieldset>
                                <fieldset>
                                  <input name="url" placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
                                </fieldset>
                                <fieldset>
                                  <textarea name="message" placeholder="Type your message here...." tabindex="5" required></textarea>
                                </fieldset>
                                 <fieldset>
                                  <input name="title" placeholder="Page Title" type="text" tabindex="6" required autofocus>
                                </fieldset>
                                <fieldset>
                                  <input name="desc" placeholder="Description" type="text" tabindex="7" required>
                                </fieldset>
                                <fieldset>
                                  <input name="keywords" placeholder="Keywords" type="text" tabindex="8" required>
                                </fieldset>
                                <fieldset>
                                  <input name="content" placeholder="Content" type="text" tabindex="9" required>
                                </fieldset>
                                  <fieldset>
                                  <input name="heading" placeholder="Heading" type="text" tabindex="10" required>
                                </fieldset>
                                <fieldset>
                                  <input name="subheading" placeholder="Subheading" type="text" tabindex="11" required>
                                </fieldset>
                                <fieldset>
                                  <textarea name="paragraph" placeholder="Paragraph...." tabindex="12" required></textarea>
                                </fieldset>
                                <fieldset>
                                  <input name="url1" placeholder="URL" type="url" tabindex="13" required>
                                </fieldset>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                        <div class="col-12 col-md-9"><input name="file1" type="file" id="file-input" name="file-input" class="form-control-file"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File input</label></div>
                                        <div class="col-12 col-md-9"><input name="file2" type="file" id="file-multiple-input" name="file-multiple-input" class="form-control-file" multiple></div>
                                    </div>
                                <fieldset>
                                  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                                </fieldset>
                              </form>
                            </div>
                     </div>
                   </div>     
           </div>
   </div>
   
 <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
  
</body>
</html>
   
