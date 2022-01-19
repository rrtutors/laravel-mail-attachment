<!DOCTYPE html>
<html>
 <head>
  <title>  send a mail with Attachment </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>
 </head>
 <body>
  <br />
  <br />
  <br />
  <div class="container box">
   <h3 align="center">send a mail with Attachment using laravel 8</h3><br />
 

<form method="post" action="{{ route('sendemail.store') }}" enctype="multipart/form-data" role="form" class="form-horizontal" id="location" style="align-content: center; margin-left: auto;">
    
    <div class="form-group">
     <label>Enter Your Name</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>

    <div class="form-group">
            <label for="resume" placeholder="(resume type *PDF*)">Document:<span class="text-danger font-weight-bold">*</span></label>
            <input type="file" class="w-100 p-1" name="image" value="{{old('resume')}}"/>
            <label class="text-danger mt-1" >(*File type- PDF & Maximum size 1 MB*)</label>
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
   </form>

  </div>
 </body>
</html>