<!doctype html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="jquery-3.0.0.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>
        <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel="stylesheet" type="text/css"/>
        <title>File Upload</title>
        <style type='text/css'>
          .hide{
            display: none;
          }
          body{
            background-image: url(style/bg.png);
            background-size:cover;
          }
          .folder {
            text-align: center;
            width: 200px;
            cursor: pointer;
            margin:50px;
          }
          .folder img {
            max-width: 100%;
            height: auto;
            width: 200px;
          }
          .folder h3{
            font-family:fantasy;
            margin-top: 0px;
          }
          .back-btn {
            color: #333;
            cursor: pointer;
            border: 1px solid #333;
            padding: 10px 20px;
            border-radius: 10px;
          }
          .folders1{
            display:inline-flex;
          }
          .folders2{
            display:inline-flex;
          }
          .back-btn i{

            margin-top: 40px;
          }
        </style>
        <script type='text/javascript'>
        $(document).ready(function(){
          $('#images').click(function(){
            $('#images').hide();
            $('.upload').removeClass('hide');
          })
          $('.back-btn').click(function(){

              $('#images').show();
              $('.upload').addClass('hide');
          })
        })

        </script>
    </head>
    <body>
      <center>
        <div class="folders1">
      <div class="container" >
          <div class="col-md-4">
            <div class="folder" id="images">
              <img src='folder.png' alt='folder' />
              <h3>Photos</h3>
            </div>
            <div class="upload hide">
              <span class="back-btn"><i class="fa fa-chevron-left"></i></span>
              <input type="file" name="file" id="file"/>
              <input type='hidden' name='folder' value='images' />
              <!-- Drag and Drop container-->
              <div class="upload-area"  id="uploadfile">
                  <h1>Drag and Drop file here<br/>Or<br/>Click to select file</h1>
              </div>
            </div>
        </div>
      </div>
      <!--  <div class="container" >
            <div class="col-md-4">
              <div class="folder" id="images">
                <img src='movies.png' alt='folder' />
                <h3>Movies</h3>
              </div>
              <div class="upload hide">
                <span class="back-btn"><i class="fa fa-chevron-left"></i></span>
                <input type="file" name="file" id="file"/>
                <input type='hidden' name='folder' value='images' />
                <!-- Drag and Drop container
                <div class="upload-area"  id="uploadfile">
                    <h1>Drag and Drop file here<br/>Or<br/>Click to select file</h1>
                </div>
              </div>
          </div>
        </div>
          <div class="container" >
              <div class="col-md-4">
                <div class="folder" id="images">
                  <img src='place.png' alt='folder' />
                  <h3>Placement Prep</h3>
                </div>
                <div class="upload hide">
                  <span class="back-btn"><i class="fa fa-chevron-left"></i></span>
                  <input type="file" name="file" id="file"/>
                  <input type='hidden' name='folder' value='images' />
                  <!-- Drag and Drop container
                  <div class="upload-area"  id="uploadfile">
                      <h1>Drag and Drop file here<br/>Or<br/>Click to select file</h1>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="folders2">
            <div class="container" >
                  <div class="folder" id="images">
                    <img src='tvshows.png' alt='folder' />
                    <h3>TV Shows</h3>
                  </div>
                  <div class="upload hide">
                    <span class="back-btn"><i class="fa fa-chevron-left"></i></span>
                    <input type="file" name="file" id="file"/>
                    <input type='hidden' name='folder' value='images' />
                      <div class="upload-area"  id="uploadfile">
                        <h1>Drag and Drop file here<br/>Or<br/>Click to select file</h1>
                    </div>
                  </div>
              </div>
              <div class="container" >
                    <div class="folder" id="images">
                      <img src='projects.png' alt='folder' />
                      <h3>Projects</h3>
                    </div>
                    <div class="upload hide">
                      <span class="back-btn"><i class="fa fa-chevron-left"></i></span>
                      <input type="file" name="file" id="file"/>
                      <input type='hidden' name='folder' value='images' />
                      
                      <div class="upload-area"  id="uploadfile">
                          <h1>Drag and Drop file here<br/>Or<br/>Click to select file</h1>
                      </div>
                    </div>
                </div>
                <div class="container" >
                      <div class="folder" id="images">
                        <img src='acad.png' alt='folder' />
                        <h3>Academics</h3>
                      </div>
                      <div class="upload hide">
                        <span class="back-btn"><i class="fa fa-chevron-left"></i></span>
                        <input type="file" name="file" id="file"/>
                        <input type='hidden' name='folder' value='images' />

                        <div class="upload-area"  id="uploadfile">
                            <h1>Drag and Drop file here<br/>Or<br/>Click to select file</h1>
                        </div>
                      </div>
                  </div>
                </div>-->
                      </center>
    </body>
</html>
