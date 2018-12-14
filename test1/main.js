var mainapp={};
(function(){
    var firebase=app_firebase;
    var uid=null;

    firebase.auth().onAuthStateChanged(function(user) {
        
        if (user) {
          // User is signed in
          uid=user.id;
        }
        else{
            uid=null;
            window.location.replace("login.html");
        }
      });
      function logout(){
          firebase.auth().signout();
          
      }
      mainapp.logout= logout;
      
})()