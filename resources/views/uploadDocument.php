<html>
<body>
    <?php
    echo Form::open(array('url' => '/uploadDocument', 'files'=>'true'));
    echo 'Select document to upload';
    echo Form::file('image');
    echo Form::submit('Upload File');
    echo Form::close();
    
    ?>
    
    </body>

</html>