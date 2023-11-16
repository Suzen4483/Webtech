var cache = Math.floor(Math.random() * 10000); // Generate a random number for the captcha
document.getElementById('cache').innerHTML = cache;
document.cookie = "cache=" + cache; // Set a cookie for the captcha
