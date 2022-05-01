<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uploaded Filet</title>
</head>

<body>

    <h1>File Uploaded</h1>
    <form action="{{url('submitForm')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name">
            </div>
            <div style="display: block">
                <label for="file">Upload File</label>
                <input type="file" name="file">
            </div>
            <div >
                <label for="description"></label>
                <textarea name="description" id="description"></textarea>
           </div>
          
           
           
        
        </div>
      
        <button type="submit" class="btn btn-primary"> Submit</button>
    
    </form>

</body>
</html>