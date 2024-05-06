const { log } = require('console');
const fs = require('fs');
const md5 = require('md5');

const targetHash = '482c811da5d5b4bc6d497ffa98491e38'

fs.readFile('passord.txt', 'utf-8', (err, data) => {
    if (err) {
        console.error(`Feil ved lesing av filen: ${err}`);
        return;
    }

    console.log(data);
    const passwords = data.split('\n');
    console.log(passwords);

    var hashedPassword;

    for (const password of passwords) {
        hashedPassword = md5(password.trim());

        if (hashedPassword === targetHash) {
            console.log(`Passord funnet: ${password}`);
            process.exit(0);
        }

    }

    

    console.log('ingen passord samsvarer.');
    process.exit(1);
});