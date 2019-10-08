
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="style.css">

  <title>Flames Calculator</title>
  <link rel = "icon" type = "image/png" href = "/icon.png">

    <meta name="created by" content="Alvis alvis.f falvis1999@gmail.com">
    <meta name="created by" content="Augustin Dennis F Dennisovich-03 adennis9993@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
    
<body>

<div class="background-wrap">
  <div class="background"></div>
</div>

<form id="accesspanel" style="max-height: 90%"; max-width="600px">
  <h1 id="litheader">FLAMES  CALCULATOR</h1>
  <div class="inset">
    <p>
      <input type="text" name="username" id="first_name" placeholder="Your Name" required/>
    </p>
      
    <p>
      <input type="text" name="username" required id="last_name" placeholder="Your Crush's Name" />
    </p>
    </div>
  <p class="p-container">
    <input type="submit" class="btn" id="say" name="login" value="Calculate">
    </p><div style="margin: 10px 10px 10px 10px"><h1 id="result" >
        </h1> 
    </div>
</form>

    <script>
function say_hi() {
    var fname = document.getElementById('first_name').value;
    var lname = document.getElementById('last_name').value;
    
    var n1=fname.toUpperCase();
    var n2=lname.toUpperCase();
    
    fname=fname.split(" ").join("");
    lname=lname.split(" ").join("");
    
    fname=fname.trim().toUpperCase();
    lname=lname.trim().toUpperCase();
    
    
    var ar = fname.split('');
    var br = lname.split('');
    

    
    var a =['a','F','L','A','M','E','S'];
    var cnt=0,i,j,len1,len2;
    var cl=1,n1,n2,n3,n4;
    len1=fname.length;
    len2=lname.length;
    cnt=len1+len2;
    for(i=0;i<len1;i++)
    {
        for(j=0;j<len2;j++)
        {
            if(ar[i]==br[j])
            {   
                ar[i]=br[j]=' ';
                cnt-=2;
                break; 
            }
        }
    }
    
    for(i=6;i>1;i--)
    {
        cl=((cl-1)+(cnt))%i;
        if(cl===0)
        {
            cl=i;
        }
        for(j=cl;j<i;j++)
        {
            a[j]=a[j+1];
        }
        
    }
    
    switch(a[1])
    {
        case 'F':var html = n1 + " & " + n2 + " are FRIENDS";
        break;
        case 'L':var html = n1 + " & " + n2 + " are in LOVE";
        break;
        case 'A':var html =n1+ " & " + n2 + " are AFFECTIONATE";
        break;
        case 'M':var html = n1 + " & " + n2 + " will get MARRIED";
        break;
        case 'E':var html =n1 + " & " + n2 + " are ENEMIES";
        break;
        case 'S':var html =n1 + " & " + n2 + " are SISTERS";
        break;
    }

    
    
 
    document.getElementById('result').innerHTML = html;
}
 
document.getElementById('say').addEventListener('click', say_hi);
</script>
    <script src="https://www.gstatic.com/firebasejs/6.4.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script>
    <script src="alvis.js"></script>
    
</body></html>