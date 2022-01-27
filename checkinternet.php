
<!DOCTYPE html>
<html>
<head>
    <style>
        
    </style>
    <script src="/scripts/snippet-javascript-console.min.js?v=1"></script>
</head>
<body>
    <button onload="click();" id="statusCheck">Click to check the <tt>window.navigator.onLine</tt> property</button><br /><br />
Check the console below for results:
    <script type="text/javascript">
        console.log('Initially ' + (window.navigator.onLine ? 'on' : 'off') + 'line');

window.addEventListener('online', () => alert('Became online'));
window.addEventListener('offline', () => alert('Became offline'));

document.getElementById('statusCheck').addEventListener('click', () => console.log('window.navigator.onLine is ' + window.navigator.onLine));
    </script>
</body>
</html>