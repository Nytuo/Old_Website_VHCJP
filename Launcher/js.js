const app = require('electron').remote.app;
const rimraf = require("rimraf");
const extract = require('extract-zip');
var request = require('request');
var fs = require('fs');
const ws = require('windows-shortcuts');
var updatedownloaded = false;
var parentfolder1 = require('path').dirname(__dirname);
var parentfolder2 = require('path').dirname(parentfolder1);
var parentfolder3 = require('path').dirname(parentfolder2);
var parentfolder4 = require('path').dirname(parentfolder3);
var parentfolder5 = require('path').dirname(parentfolder4);
var parentfolder6 = require('path').dirname(parentfolder5);
var parentfolder7 = require('path').dirname(parentfolder6);
var parentfolder8 = require('path').dirname(parentfolder7);
var parentfolder9 = require('path').dirname(parentfolder8);
const CryptoJS = require('crypto-js')
var gamelocation = gameloc();
const { execSync } = require('child_process');
if (process.platform == "linux") {
    if (fs.existsSync(app.getPath("documents") + "/nytuolauncher_data/LID_ONLINE.txt")) {
        if (fs.readFileSync(app.getPath("documents") + "/nytuolauncher_data/LID_ONLINE.txt") == "0") {

            LID = fs.readFileSync(app.getPath("documents") + "/nytuolauncher_data/LID.txt").toString()
            fs.writeFileSync(app.getPath("documents") + "/nytuolauncher_data/LID_ONLINE.txt", "1")
            window.location.href = "https://launcher.nytuo.yo.fr/profile.php?lang=" + LID.toLowerCase()
        } else {
            console.log("LID_ONLINE already fill")
        }

    } else {
        LID = fs.readFileSync(app.getPath("documents") + "/nytuolauncher_data/LID.txt").toString()
        fs.writeFileSync(app.getPath("documents") + "/nytuolauncher_data/LID_ONLINE.txt", "1")
        window.location.href = "https://launcher.nytuo.yo.fr/profile.php?lang=" + LID.toLowerCase()
    }
} else {
    if (fs.existsSync(parentfolder4 + "/nytuolauncher_data/LID_ONLINE.txt")) {
        if (fs.readFileSync(parentfolder4 + "/nytuolauncher_data/LID_ONLINE.txt") == "0") {

            LID = fs.readFileSync(parentfolder4 + "/nytuolauncher_data/LID.txt").toString()
            fs.writeFileSync(parentfolder4 + "/nytuolauncher_data/LID_ONLINE.txt", "1")
            window.location.href = "https://launcher.nytuo.yo.fr/profile.php?lang=" + LID.toLowerCase()
        } else {
            console.log("LID_ONLINE already fill")
        }

    } else {
        LID = fs.readFileSync(parentfolder4 + "/nytuolauncher_data/LID.txt").toString()
        fs.writeFileSync(parentfolder4 + "/nytuolauncher_data/LID_ONLINE.txt", "1")
        window.location.href = "https://launcher.nytuo.yo.fr/profile.php?lang=" + LID.toLowerCase()
    }
}



function gameloc() {
    console.log(parentfolder4)
    if (process.platform == "linux") {

        if (fs.existsSync(app.getPath("documents") + "/nytuolauncher_data/GamesFolderLoc.txt") === true) {
            if (fs.readFileSync(app.getPath("documents") + "/nytuolauncher_data/GamesFolderLoc.txt") !== "") {
                return fs.readFileSync(app.getPath("documents") + "/nytuolauncher_data/GamesFolderLoc.txt");
            } else {
                alert("Error01");
                return app.getPath("documents");

            }

        } else {
            alert("Error02");
            return app.getPath("documents");
        }
    } else {
        if (fs.existsSync(parentfolder4 + "/nytuolauncher_data/GamesFolderLoc.txt") === true) {
            if (fs.readFileSync(parentfolder4 + "/nytuolauncher_data/GamesFolderLoc.txt") !== "") {
                return fs.readFileSync(parentfolder4 + "/nytuolauncher_data/GamesFolderLoc.txt");
            } else {
                alert("Error03");
                return parentfolder4;

            }

        } else {
            alert("Error04");
            return parentfolder4;
        }
    }

}

function gameUsername(username) {

    console.log('working 01')
    fs.writeFileSync(gamelocation + "/Games/Username.txt", username)
}

function GetEmail(email) {
    if (process.platform == "linux") {
        fs.writeFileSync(app.getPath("documents") + "/nytuolauncher_data/CurrentUser/Email.txt", email)

    } else {
        fs.writeFileSync(parentfolder4 + "/nytuolauncher_data/CurrentUser/Email.txt", email)

    }
}

function LaunchLauncherWindowFromServer() {
    if (process.platform == 'linux' || process.platform == "darwin") {
        const remote = require('electron').remote;
        const BrowserWindow = remote.BrowserWindow;
        const path = require('path');
        let win = new BrowserWindow({

            backgroundColor: 212121,
            minWidth: 1280,
            minHeight: 720,
            width: 1280,
            height: 720,
            webPreferences: {
                webSecurity: true,
                nodeIntegration: true,
                enableRemoteModule: true
            },


        })
        win.loadFile(parentfolder2 + '/app/index.html')


    } else {
        const remote = require('electron').remote;
        const BrowserWindow = remote.BrowserWindow;
        const path = require('path');
        let win = new BrowserWindow({

            backgroundColor: 212121,
            minWidth: 1280,
            minHeight: 720,
            width: 1280,
            height: 720,
            webPreferences: {
                webSecurity: true,
                nodeIntegration: true,
                enableRemoteModule: true
            },


        })
        win.loadFile(parentfolder2 + '/app/index.html')

    }
    close()
}

function passwordtxt(password) {
    console.log('working 02')
    password = CryptoJS.AES.encrypt(password, "PassKeyForTheEncryptionOfThePasswordGoHere")
    if (process.platform == "linux") {
        fs.writeFileSync(app.getPath("documents") + "/nytuolauncher_data/Password.txt", password)
    } else {
        fs.writeFileSync(parentfolder4 + "/nytuolauncher_data/Password.txt", password)
    }

}

function getPass() {
    console.log('working 03')
    if (process.platform == "linux") {
        return CryptoJS.enc.Latin1.stringify(CryptoJS.AES.decrypt(fs.readFileSync(app.getPath("documents") + "/nytuolauncher_data/Password.txt").toString(), "PassKeyForTheEncryptionOfThePasswordGoHere"))

    } else {

        return CryptoJS.enc.Latin1.stringify(CryptoJS.AES.decrypt(fs.readFileSync(parentfolder4 + "/nytuolauncher_data/Password.txt").toString(), "PassKeyForTheEncryptionOfThePasswordGoHere"))


    }



}

function getName() {
    console.log('working 04')
    return fs.readFileSync(gamelocation + "/Games/Username.txt")
}

function DownlaodFile(file_url, targetPath) {
    console.log("DL phase 2")
    var received_bytes = 0;
    var total_bytes = 0;
    var req = request({
        method: 'GET',
        uri: file_url
    });
    var out = fs.createWriteStream(targetPath);
    var starte = new Date().getTime();
    console.log("DL phase 3")
    req.pipe(out);
    req.on('response', function(data) {
        total_bytes = parseInt(data.headers['content-length']);

    });
    req.on('end', function() {
        LaunchLauncherWindowFromServer();
    })
}

function DLPP(ID) {
    if (process.platform == 'linux') {
        if (!fs.existsSync(app.getPath("documents") + '/nytuolauncher_data/CurrentUser')) {
            fs.mkdirSync(app.getPath("documents") + '/nytuolauncher_data/CurrentUser')
        }
        DownlaodFile('https://nytuo.yo.fr/Uploads/profile' + ID + '.jpg', app.getPath("documents") + "/nytuolauncher_data/CurrentUser/PP.jpg")

    } else {
        console.log(ID)
        if (!fs.existsSync(parentfolder4 + '/nytuolauncher_data/CurrentUser')) {
            fs.mkdirSync(parentfolder4 + '/nytuolauncher_data/CurrentUser')
        }
        DownlaodFile('https://nytuo.yo.fr/Uploads/profile' + ID + '.jpg', parentfolder4 + "/nytuolauncher_data/CurrentUser/PP.jpg")

    }
}

function logout() {
    if (process.platform == "linux") {
        fs.writeFileSync(app.getPath("documents") + "/nytuolauncher_data/Password.txt", "")
        fs.unlinkSync(app.getPath("documents") + "/nytuolauncher_data/CurrentUser/PP.jpg")

    } else {
        console.log("working08")
        fs.writeFileSync(parentfolder4 + "/nytuolauncher_data/Password.txt", "")
        fs.unlinkSync(parentfolder4 + "/nytuolauncher_data/CurrentUser/PP.jpg")
    }
    fs.writeFileSync(gamelocation + "/Games/Username.txt", "")
    if (process.platform == 'linux') {
        var GamesIDs = ["SFO", "LAATIM", "SGB", "SF", "LA", "VITF", "TTD", "FWD", "TB", "WR", "AE", "SNRE", "Email"]
        for (let i = 0; i < GamesIDs.length; i++) {
            if (fs.existsSync(app.getPath("documents") + "/nytuolauncher_data/CurrentUser/" + GamesIDs[i] + ".txt")) {
                fs.unlinkSync(app.getPath("documents") + "/nytuolauncher_data/CurrentUser/" + GamesIDs[i] + ".txt")

            }
        }
    } else if (process.platform == 'win32') {
        var GamesIDs = ["SFO", "LAATIM", "SGB", "SF", "LA", "VITF", "TTD", "FWD", "TB", "WR", "AE", "SNRE", "Email"]
        for (let i = 0; i < GamesIDs.length; i++) {
            if (fs.existsSync(parentfolder4 + "/nytuolauncher_data/CurrentUser/" + GamesIDs[i] + ".txt")) {
                fs.unlinkSync(parentfolder4 + "/nytuolauncher_data/CurrentUser/" + GamesIDs[i] + ".txt")

            }
        }

    }
    window.location.href = "https://launcher.nytuo.yo.fr/profile.php"
}

function Gamesavailable(SFO, LAATIM, SGB, SF, LA, VITF, TTD, FWD, TB, WR, AE, SNRE) {
    
    var t = []
    if (SFO == 1) {
        t.push('SFO')
    }
    if (LAATIM == 1) {
        t.push('LAATIM')
    }
    if (SGB == 1) {
        t.push('SGB')
    }
    if (SF == 1) {
        t.push('SF')
    }
    if (LA == 1) {
        t.push('LA')
    }
    if (VITF == 1) {
        t.push('VITF')
    }
    if (TTD == 1) {
        t.push('TTD')
    }
    if (FWD == 1) {
        t.push('FWD')
    }
    if (TB == 1) {
        t.push('TB')
    }
    if (WR == 1) {
        t.push('WR')
    }
    if (AE == 1) {
        t.push('AE')
    }
    if (SNRE == 1) {
        t.push('SNRE')
    }
    console.log(t)
    if (process.platform == "linux") {
        for (let i = 0; i < t.length; i++) {
            fs.writeFileSync(app.getPath("documents") + '/nytuolauncher_data/CurrentUser/' + t[i] + '.txt', CryptoJS.AES.encrypt('true', "GamesAvailablePass"))
        }
    } else {
        for (let i = 0; i < t.length; i++) {
            
            fs.writeFileSync(parentfolder4 + '/nytuolauncher_data/CurrentUser/' + t[i] + '.txt', CryptoJS.AES.encrypt('true', "GamesAvailablePass"))
        }
    }
}