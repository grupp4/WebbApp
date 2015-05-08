var SSH = require('simple-ssh');

console.log("test");
var ssh = new SSH({
    host: '130.237.238.45',
    user: 'pi',
    pass: '742'
});

ssh.exec('echo $PATH', {
    out: function(stdout) 
	{
        console.log(stdout);
    }
}).start();

