// version 1.0


var loadPosts = document.getElementById('load-posts');
var displayPosts = document.getElementById('display-posts');
var wait = document.getElementById('wait');

if (loadPosts) {
  loadPosts.addEventListener("click", function() {
    var aj = new XMLHttpRequest();
    aj.open('GET', 'https://vgtmcity.com/wp-json/wp/v2/posts');
    aj.onload = function(){
      if(aj.status >= 200 && aj.status < 400){  // 200 is sucess, 500 is connection error
        var data = JSON.parse(aj.responseText);
        createHtml(data);  // call createHtml function
        loadPosts.remove();
      }else {
        console.log('error');
      }
    };

    aj.onerror= function() {
      console.log('connection error');
    }

    aj.send();
  });
}

function createHtml(postsData){
  var htmlString = '';
  for (var i = 0; i < postsData.length; i++) {
    htmlString += '<h2>' + postsData[i].title.rendered + '</h2>';
    htmlString += postsData[i].excerpt.rendered;
    htmlString += 'okay';
  }
  displayPosts.innerHTML= htmlString;
}






//  quick posts ..
var quickPostsBtn = document.getElementById('add-post-btn');

if(quickPostsBtn) {
  quickPostsBtn.addEventListener("click", function() {
    var quickPostData = {
      "title": document.getElementById('add-title').value,
      "content": document.getElementById('add-content').value,
      "status": "publish"
    }

    var qp = new XMLHttpRequest();
    qp.open('POST', callback.siteURL + 'wp-json/wp/v2/posts');
    qp.setRequestHeader("X-WP-Nonce", callback.nonce);
    // qp.setRequestHeader('X-WP-Nonce', wpApiSettings.nonce);
    qp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
    qp.send(JSON.stringify(quickPostData));


  });
}
