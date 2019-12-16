    var email = document.getElementById("emailInput");
    var password = document.getElementById("passwordInput");  
firebase.auth().onAuthStateChanged(function(user) {
    var email = document.getElementById("emailInput");
    var password = document.getElementById("passwordInput");
    if (user) {
      // User is signed in.
      document.getElementById("loggedIn").style.display = "block";
      document.getElementById("notLoggedIn").style.display = "none";

      var user = firebase.auth().currentUser;

      if(user != null) {
          var emailId = user.email;
          document.getElementById("userText").innerHTML = emailId + ", you are logged in";
      }
    } else {
      // No user is signed in.
      document.getElementById("loggedIn").style.display = "none";
      document.getElementById("notLoggedIn").style.display = "block";
    }
  });

$("#loginBtn").click(function(){
    var email = document.getElementById("emailInput");
    var password = document.getElementById("passwordInput");
    firebase.auth().signInWithEmailAndPassword(email.value, password.value).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        

        window.alert("Error : " + errorMessage);
        // ...
      });
});

$("#logoutBtn").click(function(){
    var email = document.getElementById("emailInput");
    var password = document.getElementById("passwordInput");
    firebase.auth().signOut();
});