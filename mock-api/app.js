const express = require('express')
const apiMocker = require('connect-api-mocker')

const port = 9400;

const app = express();

app.use('/api/v1', apiMocker('mock-api'));

console.log(`Mock API Server is up and running at: http://localhost:${port}`);

app.listen(port);