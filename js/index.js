var firebaseConfig = {
    apiKey: "AIzaSyDONks-_Yv6tdonZOS9nIWHemzUzZ9ZIGA",
    authDomain: "iotlock-40328.firebaseapp.com",
    databaseURL: "https://iotlock-40328.firebaseio.com",
    projectId: "iotlock-40328",
    storageBucket: "iotlock-40328.appspot.com",
    messagingSenderId: "954168573416",
    appId: "1:954168573416:web:10f652bcb4fa9c14e0785d",
    measurementId: "G-MDJNVHDJRZ"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  firebase.auth.Auth.Persistence.LOCAL;
  $("login-button").click(function()
  {
    var email=$("email").val();
    var password=$("password").val();
    if(email!="" && password!="")
    {
        var result=firebase.auth().signInWithEmailAndPassword(email,password);
        result.catch(function(error){
            var errorCode=error.code;
            var errorMessage=error.message;
            console.log(errorCode);
            console.log(errorMessage);
            window.alert("Message : "+errorMessage);
        });
    }
    else
    {
        window.alert("Form is incomplete.Please fill out all fields...");
    }
  });