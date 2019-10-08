var firebaseConfig = {
    apiKey: "AIzaSyAjb1ZAvRaRNF5ONjnVWe1Tp2ThV7XdSHM",
    authDomain: "flamesbyaa.firebaseapp.com",
    databaseURL: "https://flamesbyaa.firebaseio.com",
    projectId: "flamesbyaa",
    storageBucket: "flamesbyaa.appspot.com",
    messagingSenderId: "199173407126",
    appId: "1:199173407126:web:8ab3ecbc28f3d223e75db7",
    measurementId: "G-V426QCFF96"
};
firebase.initializeApp(firebaseConfig);


var messagesRef = firebase.database().ref('flamesbyaa1999');

document.getElementById('accesspanel').addEventListener('submit', submitForm);



function getInputVal(id) {
    return document.getElementById(id).value;

}


function submitForm(e) {
    e.preventDefault();

    var name1 = getInputVal('first_name');
    var name2 = getInputVal('last_name');

    saveMessage(name1, name2);

}

function saveMessage(name1, name2) {
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
        name: name1,
        crush_name: name2
    });
}