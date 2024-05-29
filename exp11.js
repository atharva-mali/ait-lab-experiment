const url = require('url');
const querystring = require('querystring');

const urlString = 'http://www.example.com/path?name=John&age=30';
const parsedUrl = url.parse(urlString);
const parsedQuery = querystring.parse(parsedUrl.query);

console.log("Query String:", parsedQuery);
