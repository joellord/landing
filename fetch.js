const spawn = require("child_process").spawn;
const ftp = require("basic-ftp");

require("dotenv").config();

console.log("\n\nLet's deploy this new landing page!");
const c = new ftp.Client();
c.ftp.verbose = false;
c.access({
    host: process.env.HOST,
    user: process.env.FTP_USER,
    password: process.env.FTP_PASSWD
}).then(_ => {
    console.log("Connected");
    return c.downloadToDir("./pages", "/public_html/landing");
}).then(result => {
    console.log(result);
    c.close();
    console.log("All done");
});
