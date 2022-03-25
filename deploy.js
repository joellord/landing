#!/usr/bin/env node
const ftp = require("basic-ftp");

require("dotenv").config();

console.log("\n\n🎉 Congrats, you updated the pages. Let's upload them.");
const c = new ftp.Client();
c.ftp.verbose = false;
c.access({
    host: process.env.HOST,
    user: process.env.FTP_USER,
    password: process.env.FTP_PASSWD
}).then(_ => {
    console.log("Connected");
    return c.uploadFromDir("./pages", "/public_html/landing");
}).then(result => {
    console.log(result);
    c.close();
    console.log("All done");
});