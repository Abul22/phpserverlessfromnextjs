<?php
echo '-';
if(isset($_GET['nestedServerless'])){
	echo 'nestedServerless resp:' . $_GET['nestedServerless']. ' rand: ('. rand() .') rand: ('. time() .') <br>';
	exit();
}

if(isset($_GET['derpNum'])){
	$result = '...';
	for($i=0; $i < $_GET['derpNum']; $i++){
		$result .= file_get_contents("https://phpserverlessfromnextjs.lukeluklus.now.sh/?nestedServerless=".$i);
	}
	echo $result;
	exit();	
}else if(isset($_GET['derpNumTwo'])){

	$derp = (isset($_GET['derpNumTwo']) ? $_GET['derpNumTwo'] : 3);
	$result='';
	for($i=0; $i < $_GET['derpNumTwo']; $i++){
	$result .= file_get_contents("https://phpserverlessfromnextjs.lukeluklus.now.sh/?derpNum=".$i);
	}
	echo 'DoubleNest::::<br> ' . $result;
	exit();
}else if(isset($_GET['wsLocal'])){
	echo file_get_contents("http://121.211.53.142/websocket.php");
	exit();
}
else if(isset($_GET['wsLocalAsync'])){
	$a = '.';
	$a .= async_curl('http://121.211.53.142/websocket.php');
	echo $a;
	exit();
}
else if(isset($_GET['wsLocalAsync2'])){	
	async_curl('http://121.211.53.142/websocket.php');
	exit();
}
else if(isset($_GET['wsLocalAsync3'])){	
	$a = '.x.';
	$a .= async_curl('http://121.211.53.142/websocket.php');
	sleep(3);
	echo $a;
	exit();
}
if(isset($_GET['wsLocalAsync3'])){
	$result = '...';
	echo async_curl('http://121.211.53.142/websocket.php');
	for($i=0; $i < $_GET['derpNum']; $i++){
		$result .= file_get_contents("https://phpserverlessfromnextjs.lukeluklus.now.sh/?nestedServerless=".$i);
	}

	exit();	
}

else if(isset($_GET['tempFile'])){	
	
$tmp_handle = fopen('php://temp', 'r+');
fwrite($tmp_handle, time() .' '.rand(1,20) );

// do some more stuff, then when you want the contents of your "file"
rewind($tmp_handle);
$file_contents = stream_get_contents($tmp_handle);
echo $file_contents;
// clean up your temporary storage handle
fclose($tmp_handle);
	
	exit();
}


else if(isset($_GET['tempFile2'])){

$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
echo 'tmp file: '. $temp_file .'<br>';
echo '<Br>'. sys_get_temp_dir().'</br>';
	
$tmp_handle = fopen($temp_file, 'r+');
	echo 'tmp handle: ' .$tmp_handle;
fwrite($tmp_handle, '--realtemp--'.time() .' '.rand(1,20).'------' );

// do some more stuff, then when you want the contents of your "file"
rewind($tmp_handle);
$file_contents = stream_get_contents($tmp_handle);
echo $file_contents;
// clean up your temporary storage handle
fclose($tmp_handle);
	
	exit();
}
else if(isset($_GET['tempFile3'])){

$temp_file = tempnam(sys_get_temp_dir(), 'Tux'.$_GET['tempFile3']);
echo 'tmp file: '. $temp_file .'<br>';
echo '<Br>'. sys_get_temp_dir().'</br>';
	
$tmp_handle = fopen($temp_file, 'r+');
	echo 'tmp handle: ' .$tmp_handle;
fwrite($tmp_handle, '--realtemp--'.time() .' '.rand(1,20).'------' );

// do some more stuff, then when you want the contents of your "file"
rewind($tmp_handle);
$file_contents = stream_get_contents($tmp_handle);
echo $file_contents;

//DONT clean up your temporary storage handle
//fclose($tmp_handle);
echo file_get_contents("https://phpserverlessfromnextjs.lukeluklus.now.sh/?tempFile4=".$_GET['tempFile3']);
	
	exit();
}
else if(isset($_GET['tempFile4'])){
echo '<pre>';
	echo exec('ls '.sys_get_temp_dir());
	
if(file_exists(sys_get_temp_dir().'/'.$_GET['tempFile4']) ){
	$temp_file=sys_get_temp_dir().'/'.$_GET['tempFile4'];
	$tmp_handle = fopen($temp_file, 'r+');
	rewind($tmp_handle);
	$file_contents = stream_get_contents($tmp_handle);
	echo '<br>Reading precreaedm ohter proc file: '. $file_contents;
	
	echo '</pre>';
}
exit();
}
else if(isset($_GET['tempFile5'])){
	echo '<pre>';
echo exec('ls -la '.sys_get_temp_dir());
$temp_file = tempnam(sys_get_temp_dir(),'/'.$_GET['tempFile5']);
echo '<Br>tmp file: '. $temp_file .'<br><br>';
echo exec('ls -la '.sys_get_temp_dir());
	echo '</pre>';
	exit();
}
else if(isset($_GET['tempFile6'])){
//echo exec('ls '.sys_get_temp_dir());
	echo '<pre>';

$c = `ls -la`;
	echo $c .'<Br><Br>';
	$c= `ls -la /tmp/`;
	echo $c .'<Br><Br>';
	$c = sys_get_temp_dir();
	echo $c .'<Br><Br>';
	$c= `ls -la {$c}`;
	echo $c .'<Br><Br>';
	echo '</pre>';
	exit();
}
else if(isset($_GET['ls'])){
//echo exec('ls '.sys_get_temp_dir());
	echo '<pre>';
echo $_GET['tempFile7'].'<Br><Br>';
$c = `ls -la {$_GET['ls']}`;
	echo $c .'<Br><Br>';	
	echo '</pre>';
	exit();
}
else if(isset($_GET['exec'])){	
	execinbackground("php 'echo \"aaaa\";' ");	
	execinbackground("php \"echo file_get_contents('http://121.211.53.142/websocket.php');\" ");
	
	execinbackground("php -r 'echo \"aaaa\";' ");	
	execinbackground("php -r \"echo file_get_contents('http://121.211.53.142/websocket.php');\" ");
	
	exit();
}
else if(isset($_GET['exec2'])){	
	execinbackground("go-php 'echo \"aaaa\";' ");
	
	execinbackground("go-php \"echo file_get_contents('http://121.211.53.142/websocket.php');\" ");
	
	execinbackground("go-php -r 'echo \"aaaa\";' ");
	
	execinbackground("go-php -r \"echo file_get_contents('http://121.211.53.142/websocket.php');\" ");
	
	exit();
}

else if(isset($_GET['exec3'])){	
//WORKS!	
	execinbackground("curl http://121.211.53.142/websocket.php");
	//kill some time to keep alive incase it finishing is what stops the instance...
	$result ='';
	$result .= file_get_contents("https://phpserverlessfromnextjs.lukeluklus.now.sh/?derpNum=".'2');
	sleep(4);
		echo 'doneExec3 ' . $result;
	exit();
}

else if(isset($_GET['exec4'])){	

	echo execinbackground("curl http://121.211.53.142/websocket.php");
	echo 1;
	
	exit();
}


else if(isset($_GET['exec5'])){	

	echo execinbackground("curl https://phpserverlessfromnextjs.lukeluklus.now.sh/?exec4=1");
	echo execinbackground("curl https://phpserverlessfromnextjs.lukeluklus.now.sh/?exec4=1");
	echo execinbackground("curl https://phpserverlessfromnextjs.lukeluklus.now.sh/?exec4=1");
	echo 2;
	
	exit();
}

else if(isset($_GET['exec55'])){	
///WARNING SELF REFERENCE..may loop till OOM.
//	echo execinbackground("curl https://phpserverlessfromnextjs.lukeluklus.now.sh/?exec55=1");
//	echo execinbackground("curl https://phpserverlessfromnextjs.lukeluklus.now.sh/?exec55=1");
	echo 55;
	
	exit();
}

else if(isset($_GET['exec6'])){	
	echo execinbackground("curl https://phpserverlessfromnextjs.lukeluklus.now.sh/?exec5=1");
	$a = rand(0,2);
	if($a)
	{
		sleep($a);
		echo 'sleepededed ' . $a;
	}
	
	echo 'yiss';	
	exit();
}


//async_curl('http://example.com/background_process_1.php');



function execinbackground($cmd) { 
    if (substr(php_uname(), 0, 7) == "Windows"){ 
        pclose(popen("start /B ". $cmd, "r"));  
    } 
    else { 
        exec($cmd . " > /dev/null &");   
    } 
} 
//fwite(fopen("urls.txt","w"),implode("\n",$urls);
//execinbackground("nodejs urlscript.js urls.txt");
///do rand shiz


      //dont work seemingly.
function async_curl($background_process=''){

    //-------------get curl contents----------------
echo '<Br>inCurlFn<br>';
    $ch = curl_init($background_process);
    curl_setopt_array($ch, array(
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER =>true,
        CURLOPT_NOSIGNAL => 1, //to timeout immediately if the value is < 1000 ms
        CURLOPT_TIMEOUT_MS => 50, //The maximum number of mseconds to allow cURL functions to execute
        CURLOPT_VERBOSE => 1,
        CURLOPT_HEADER => 1
    ));
    $out = curl_exec($ch);

    //-------------parse curl contents----------------

    //$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    //$header = substr($out, 0, $header_size);
    //$body = substr($out, $header_size);

    curl_close($ch);
echo '<br>doneCurlFn<Br>';
    return true;
}



?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <!--
    Modified from the Debian original for Ubuntu
    Last updated: 2014-03-19
    See: https://launchpad.net/bugs/1288690
  -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Apache2 Ubuntu Default Page: It works</title>
<style type="text/css" media="screen">
  * {
    margin: 0px 0px 0px 0px;
    padding: 0px 0px 0px 0px;
  }

  body, html {
    padding: 3px 3px 3px 3px;

    background-color: #D8DBE2;

    font-family: Verdana, sans-serif;
    font-size: 11pt;
    text-align: center;
  }

  div.main_page {
    position: relative;
    display: table;

    width: 800px;

    margin-bottom: 3px;
    margin-left: auto;
    margin-right: auto;
    padding: 0px 0px 0px 0px;

    border-width: 2px;
    border-color: #212738;
    border-style: solid;

    background-color: #FFFFFF;

    text-align: center;
  }

  div.page_header {
    height: 99px;
    width: 100%;

    background-color: #F5F6F7;
  }

  div.page_header span {
    margin: 15px 0px 0px 50px;

    font-size: 180%;
    font-weight: bold;
  }

  div.page_header img {
    margin: 3px 0px 0px 40px;

    border: 0px 0px 0px;
  }

  div.table_of_contents {
    clear: left;

    min-width: 200px;

    margin: 3px 3px 3px 3px;

    background-color: #FFFFFF;

    text-align: left;
  }

  div.table_of_contents_item {
    clear: left;

    width: 100%;

    margin: 4px 0px 0px 0px;

    background-color: #FFFFFF;

    color: #000000;
    text-align: left;
  }

  div.table_of_contents_item a {
    margin: 6px 0px 0px 6px;
  }

  div.content_section {
    margin: 3px 3px 3px 3px;

    background-color: #FFFFFF;

    text-align: left;
  }

  div.content_section_text {
    padding: 4px 8px 4px 8px;

    color: #000000;
    font-size: 100%;
  }

  div.content_section_text pre {
    margin: 8px 0px 8px 0px;
    padding: 8px 8px 8px 8px;

    border-width: 1px;
    border-style: dotted;
    border-color: #000000;

    background-color: #F5F6F7;

    font-style: italic;
  }

  div.content_section_text p {
    margin-bottom: 6px;
  }

  div.content_section_text ul, div.content_section_text li {
    padding: 4px 8px 4px 16px;
  }

  div.section_header {
    padding: 3px 6px 3px 6px;

    background-color: #8E9CB2;

    color: #FFFFFF;
    font-weight: bold;
    font-size: 112%;
    text-align: center;
  }

  div.section_header_red {
    background-color: #CD214F;
  }

  div.section_header_grey {
    background-color: #9F9386;
  }

  .floating_element {
    position: relative;
    float: left;
  }

  div.table_of_contents_item a,
  div.content_section_text a {
    text-decoration: none;
    font-weight: bold;
  }

  div.table_of_contents_item a:link,
  div.table_of_contents_item a:visited,
  div.table_of_contents_item a:active {
    color: #000000;
  }

  div.table_of_contents_item a:hover {
    background-color: #000000;

    color: #FFFFFF;
  }

  div.content_section_text a:link,
  div.content_section_text a:visited,
   div.content_section_text a:active {
    background-color: #DCDFE6;

    color: #000000;
  }

  div.content_section_text a:hover {
    background-color: #000000;

    color: #DCDFE6;
  }

  div.validator {
  }
    </style>
    
    <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>
    <script src="https://chr15m.github.io/bugout/bugout.min.js" type="application/javascript"></script>
    
    
    <script src="https://cdn.jsdelivr.net/gh/dchest/tweetnacl-js@master/nacl-fast.min.js" type="application/javascript"></script>
    
    <!--<script src="https://cdn.jsdelivr.net/gh/whs/tweetnacl-sealed-box@master/sealedbox.web.js" type="application/javascript"></script>-->
    
     <script src="https://cdn.jsdelivr.net/gh/dchest/tweetnacl-util-js@master/nacl-util.min.js" type="application/javascript"></script>
     
    
    
    
    <style>
  body { background-color: #333; }
  main_page { background-color: #fff; }
  pre { color: #000; white-space: pre-wrap; word-wrap: break-word; }
</style>

  </head>
  <body>
    
    <?php 
    
    echo 'M2  ooh..give a GET q=? ';

if(isset($_GET['q']) ){
  print_r($_GET['q']);
}
echo '<br><br><br>';
    
    
function is_prime_via_preg_expanded($number) {
    return !preg_match('/^1?$|^(11+?)\1+$/x', str_repeat('1', $number));
}
    
    
echo 'set GET s=1 e=100 for primes between 1 and 100 <Br>';
echo 'starting time: <br>';
echo time();
echo '<br>';
$start = 2; // start here (2 is the first prime)
$end = 100;
if(isset($_GET['s']) ){
$start = $_GET['s'];
}
if(isset($_GET['e']) ){
$end = $_GET['e'];
}
$i=$start;
$howMany =0;
while ($i<=$end) {
    if (is_prime_via_preg_expanded($i)) {
    $howMany++;
    
    if($end - $i < 10){
      echo $i." <br />\n"; 
    }
    }
    $i++;
}
echo 'there were ' . $howMany . ' primes';
echo '<br> ending time: <br>';
echo time();
    
    ?>
    
    
    <div class="main_page">
      <div class="page_header floating_element">
        </div>
        <div>
        ***
        
        
        <?php
        // phpinfo();
        ?>
        
        key:
        <input type="text" id="textA"/>
        val:
        <input type="text" id="textB"/>
        
        <button id='getK' type='button'>new key</button>
        <button id='setV'type='button'>set</button>
        <button id='getV'type='button'>get</button>
        
        
        <pre id="log"></pre>
        
        
        
             <script type="text/javascript" >
             
 var key = new Uint8Array(nacl.secretbox.keyLength);
  var nonce = new Uint8Array(nacl.secretbox.nonceLength);
  var i;
  for (i = 0; i < key.length; i++) key[i] = i & 0xff;
  for (i = 0; i < nonce.length; i++) nonce[i] = (32+i) & 0xff;
  var msg = nacl.util.decodeUTF8('message to encrypt');
  var box = nacl.secretbox(msg, nonce, key);
  var openedMsg = nacl.secretbox.open(box, nonce, key);
nacl.util.encodeUTF8(openedMsg)



var enc = nacl.util.encodeBase64;
var clientKeys = nacl.box.keyPair();
  var serverKeys = nacl.box.keyPair();
  var nonce = new Uint8Array(nacl.box.nonceLength);
  for (var i = 0; i < nonce.length; i++) nonce[i] = (32+i) & 0xff;
  var msg = nacl.util.decodeUTF8('message to encrypt');
  var clientBox = nacl.box(msg, nonce, serverKeys.publicKey, clientKeys.secretKey);
  var clientMsg = nacl.box.open(clientBox, nonce, clientKeys.publicKey, serverKeys.secretKey);
  // t.equal(nacl.util.encodeUTF8(clientMsg), nacl.util.encodeUTF8(msg));
  var serverBox = nacl.box(msg, nonce, clientKeys.publicKey, serverKeys.secretKey);
  // t.equal(enc(clientBox), enc(serverBox));
  var serverMsg = nacl.box.open(serverBox, nonce, serverKeys.publicKey, clientKeys.secretKey);
  nacl.util.encodeUTF8(serverMsg)

             
             </script>
        
           <script type="text/javascript" >
        
        //var b = new Bugout({seed: localStorage["bugout-demo-seed"]});
		   
	// and others need to connect with the address given. this guy is server.
	//var b = new Bugout();
		   
	//All peers connecting to same swarm. No server..but all can see and connect each other.
	var b = new Bugout('sailing');
        
        // or if client... with address() of server
        //var b = new Bugout('bSfWZRxyTyif3qxHogyim8dk2b7F1iKvqc');
        
        
  // save the seed for next time
//   localStorage["bugout-demo-seed"] = b.seed;
		   
		   
  // log this server's address
  log("1B:address:", b.address());
  log("announcing...");
  /*** rpc calls ***/
  // simple "ping" rpc call
  b.register("pang", function(address, args, cb) {
    args["pong"] = Math.random();
    cb(args);
  });
  
  b.register("ping", function(address, args, cb) {
    args["pong"] = Math.random();
    cb(args);
  });
		   
		   
b.register("joinMyRoom", function(address, args, cb) {
    	console.log('idk');
	console.log(args)
	cb(args);
  });

  // register your RPC calls for clients here
  /*** logging ***/
  // log when network connectivity changes
  b.on("connections", function(c) {
    log("connections:", c);
    if (c == 0) {
      log("ready");
    }
  });
  // log when a client sends a message
  b.on("message", function(address, msg) { log("message:", address, msg); });
  // log when a client makes an rpc call
  b.on("rpc", function(address, call, args) { log("rpc:", address, call, args); });
  // log when we see a new client address
  b.on("seen", function(address) { log("seen:", address); });
  
  
  
  
  
  
  
  //client
  
  b.on("server", function(address) {
  // once we can see the server
  // make an API call on it
  b.rpc("ping", {"hello": "world"}, function(result) {
    console.log(result);
    // {"hello": "world", "pong": true}
    // also check result.error
  });

	  
	  b.rpc("pang", {"hayo": "gayo"}, function(result) {
    console.log(result);
    // {"hello": "world", "pong": true}
    // also check result.error
  });
  
	  
  
  
  

		   
		   
		   
		   
  
		   
b.rpc("joinMyRoom", {"room": b.address()}, function(result) {
    //PrivateRoom()
	console.log('wtf');
	console.log(result);
    // {"hello": "world", "pong": true}
    // also check result.error
  });	   
		   
		   
  });
		   
		   
		   
var c = new Bugout();
log('madeC: ',c.address());
PrivateRoom('');
function PrivateRoom(newRoomKey=''){
       if(newRoomKey){
       	c = new Bugout(newRoomKey);
       }
	
  
		   
  // log this server's address
  log("Caddress:", c.address());
  log("Cannouncing...");
  /*** rpc calls ***/
  // simple "ping" rpc call
  c.register("ping", function(address, args, cb) {
    args["pong"] = Math.random();
    cb(args);
  });
  
  c.register("ping", function(address, args, cb) {
    args["pong"] = Math.random();
    cb(args);
  });
  // register your RPC calls for clients here
  /*** logging ***/
  // log when network connectivity changes
  c.on("connections", function(c) {
    log("C:connections:", c);
    if (c == 0) {
      log("ready");
    }
  });
  // log when a client sends a message
  c.on("message", function(address, msg) { log("cmessage:", address, msg); });
  // log when a client makes an rpc call
  c.on("rpc", function(address, call, args) { log("crpc:", address, call, args); });
  // log when we see a new client address
  c.on("seen", function(address) { log("cseen:", address); });
  
  
  
  
  
  
  
  //client
  
  c.on("server", function(address) {
  // once we can see the server
  // make an API call on it
  c.rpc("ping", {"h2ello": "wor2ld"}, function(result) {
    console.log(result);
    // {"hello": "world", "pong": true}
    // also check result.error
  });
});
	   
		   
		   
}
		   
		   
		   
		   
		   
function log() {
    var args = Array.prototype.slice.call(arguments);
    console.log.apply(null, args);
    args = args.map(function(a) { if (typeof(a) == "string") return a; else return JSON.stringify(a); });
    document.getElementById("log").textContent += args.join(" ") + "\n";
  }		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
          
            var key;
            
            document.getElementById('getK').onclick = function(e) {
              getKey();
            }
            document.getElementById('setV').onclick = function(e) {
              setVal(document.getElementById('textA').value,document.getElementById('textB').value);
            }
            document.getElementById('getV').onclick = function(e) {
              getVal(document.getElementById('textA').value);
            }

            function getKey(){
              ajaxKV('https://kvdb.io/','','POST',(x)=>{key=x; log(x); });
            }
            getKey();
            
            function setVal(a,b,ttl=''){
              //stayalive seconds = max 7dasy free.
              if(ttl){
                a = a+'?ttl='+ttl;
              }
              //if no key getKey().then this.
              log('set', a,b);
              ajaxKV('https://kvdb.io/'+key+'/'+a,b,'POST');
            }
            
            function getVal(a){
              if(!a){ a = document.getElementById('textA').value; }
              //if no key getKey().then this.
              ajaxKV('https://kvdb.io/'+key+'/'+a,'','GET',(x)=>{ console.log(x); log(x); return x;});
            }
          
          
          
             function ajaxPOST(url, payLoadObject= {}, succ) {

                var URIbuild = '';
                Object.keys(payLoadObject).forEach(function(key, index) {
                    if (index > 0) { URIbuild += '&'; }
                    URIbuild += encodeURI(key + '=' + payLoadObject[key]);
                })


                xhr = new XMLHttpRequest();

                //    xhr.open('POST', 'myservice/username?id=some-unique-id');
                xhr.open('POST', url);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        console.log(xhr.responseText);
                        succ(xhr.responseText);
                    }
                    else if (xhr.status !== 200) {
                        console.log('Request failed.  Returned status of ' + xhr.status);
                         console.log(xhr.responseText);
                        return false;
                    }
                };

                //respond with an object - return [succ?,status,responseTExt]

                // $_POST['name'] == newName
                xhr.send(URIbuild);
            }
            
            var globalReturn;
            function ajaxKV(url,data,type='POST', cb = '' ){
               $.ajax({
                url: url,
                type: type,
                data: data,
                success: function(data, textStatus, jqXHR) {
                    globalReturn = data;
                    // console.log(data);
                    // console.log('data');
                    // console.log(textStatus);
                    // console.log('textStatus');
                    // console.log(jqXHR);
                    // console.log('jqXHR');
                    if(cb){
                      cb(data);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
					    alert(textStatus);
                }
            });
            
            }
            
            
            /*
    document.getElementById('loginBtn').onclick = function(e) {
 //	alert('using: '+tsCode);
        //var tsCodeLogin = document.getElementById('tsCodeLogin').value;
        var orgLogin = document.getElementById('orgLogin').value;
        var orgPassword = document.getElementById('orgPassword').value;

        if (orgLogin && orgPassword) {
        		
            $.ajax({
                url: "https://www.sailingsp3r.tk/api.php",
                type: "POST",
                data: { 'loginSubmit': '1', 'orgLogin':orgLogin , 'orgPassword': orgPassword},
                success: function(data, textStatus, jqXHR) {
                    if (data) {
                        tsCode=data
                        window.localStorage.setItem("tsCode", data);
                        
                        pr('login:' + data);
                        refreshLocations()
                        refreshTerminalOptions();
                        
                        //pushScanData(85771, Math.round(Date.now()/1000), 'asd');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
					alert(textStatus);
                }
            });
        }

    }

document.getElementById('logout').onclick = function(e) {
    if(window.localStorage.getItem("tAssignCode")){
        $.post( "https://www.sailingsp3r.tk/api.php", { deAssignTerm: window.localStorage.getItem("tAssignCode")})
        .done(function( data,textStatus ) { alert(data); });
    }
	window.localStorage.clear();
    
$.ajax({
                url: "https://www.sailingsp3r.tk/api.php",
                type: "POST",
                cache: false,
                data: { 'SetNewLocName': newLocName, tsCode: tsCode },
                success: function(data, textStatus, jqXHR) {
                //    alert(data);
                    if (data) {
                        pr(data)
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                alert('f');
                }
            });
          
}
    

*/
            
          
           
        </script>
        
      </div>
    </div>
  </body>
</html>







<?php
phpinfo();
?>
