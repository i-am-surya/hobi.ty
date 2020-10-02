function FacebookLogin() {
  //first of all create facebook provider object

  var provider = new firebase.auth.FacebookAuthProvider();
  //Login with popup window
  firebase.auth().signInWithPopup(provider).then(function() {
    
    //code executes after successful login
    window.location="home.php";
  }).catch(function(error) {
    var errorMessage=error.message;
    alert(errorMessage);
  });
}