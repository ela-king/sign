<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Signature</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <style>
        .btn{
            padding: 5px;
            background: none;
            border:1px solid gray;
            border-radius: 3px;
            outline: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h5>Put Your Signature Here</h5>
    <canvas style="border: 1px solid slategrey;border-radius: 5px;"></canvas>
    <br/>
    <button class="btn" onclick="clearSign()">Clear</button>
    <button class="btn" onclick="getData()">Submit</button>
    <div id="Sign">
        <h5>Your Signature</h5>
        <img src="" alt="signature" style="border: 1px solid lightgreen;border-radius: 5px;" />
    </div>
    <script>
        var canvas = document.querySelector("canvas");
        var signaturePad = new SignaturePad(canvas);
        document.getElementById("Sign").style = "display :none";
        function getData(){
            if(signaturePad.isEmpty()){
                alert("empty");
            }else{
            document.getElementById("Sign").style = "display :block";
            document.querySelector("img").src = signaturePad.toDataURL();
            }
        }
        function clearSign(){
            signaturePad.clear();
            document.getElementById("Sign").style = "display :none";
            document.querySelector("img").src = '';
        }
    </script>
</body>
</html>