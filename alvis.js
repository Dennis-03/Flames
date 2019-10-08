// Your web app's Firebase configuration
var firebaseConfig = {
  apiKey: "AIzaSyDcL6ir_OlEIAqScm2JDYpH50IC00MAmGw",
  authDomain: "flamesbyaa1999.firebaseapp.com",
  databaseURL: "https://flamesbyaa1999.firebaseio.com",
  projectId: "flamesbyaa1999",
  storageBucket: "",
  messagingSenderId: "87334962126",
  appId: "1:87334962126:web:52fdf22a3196bc0a"
};
// Initialize Firebase   <script src="https://www.gstatic.com/firebasejs/6.4.0/firebase-app.js"></script>
// <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script>
firebase.initializeApp(firebaseConfig);


var messagesRef = firebase.database().ref('flamesbyaa1999');

document.getElementById('accesspanel').addEventListener('submit', submitForm);



function getInputVal(id){
  return document.getElementById(id).value;

}


function submitForm(e){
  e.preventDefault();

  var alvisname1 = getInputVal('first_name');
  var alvisname2 = getInputVal('last_name');

  saveMessage(alvisname1, alvisname2);
 
}

function saveMessage(alvisname1, alvisname2){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: alvisname1,
    crush_name: alvisname2
  });
}