<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="method.css">
    <title>PUBMED ALEXA</title>
</head>

<body>

    <div class="container">
        <h1>Saved Research Papers On <img src="pubmed.png" alt="Logo" title="Logo" width="100"> Alexa Skill</h1>

        <hr style=" background-color: #9abff9; height: 6px;">

        <?php
        $harsh=0;
        $email = $_POST['email'];
        $url = "https://lrphilqumb.execute-api.us-east-1.amazonaws.com/sandbox";
        $data = file_get_contents($url);
        $characters = json_decode($data, true);
        $output = " ";
        $output1 = " ";
        foreach ($characters['Items'] as $key) {
            if ($key['email']['S'] == $email) {
                foreach ($key['saved']['L'] as $value) {
                    $output .= "<b>Title: </b>" . $value['M']['Title']['S'] . "<hr>";
                    echo $output;
                    $output1 .= "<b>Abstract: </b>" . $value['M']['Abstract']['S'] . "<br><br><br>";
                    echo $output1;
                    $output = " ";
                    $output1 = " ";
                }
            }
            else {
                if ($harsh==0) {
                    echo "No record exists";
                    $harsh++;
                }
                
            }
        }

        ?>

    </div>


</body>

</html>