var twitterize = (link) => {

  const tweet = document.getElementById('tweetText').innerHTML;

  document.getElementById('tweetText').innerHTML = anchorme(tweet);

};

twitterize();
