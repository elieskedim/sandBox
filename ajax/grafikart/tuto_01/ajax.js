var xhr = new XMLHttpRequest(),
    method = "GET",
    url = "supp_article.php";

var lien = document.getElementById('send');
xhr.open(method, url, true);

lien.addEventListener('click', function(e){
    xhr.onreadystatechange = function () {
        if(this.readyState === 4 && this.status === 200) {
          console.log(this.responseText);
        }
      };
      xhr.send();
});
