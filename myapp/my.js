// Open Chrome browser
function openChromeBrowser() {
    var url = "https://www.google.com"; // Replace this with the URL you want to open
    var newWindow = window.open(url, '_blank');
    
    // Check if the browser was blocked from opening the window
    if (newWindow === null || typeof(newWindow) === 'undefined') {
      alert("Please allow pop-ups for this site to open the browser.");
    }
  }
  
  // Call the function to open Chrome browser
  openChromeBrowser();
  