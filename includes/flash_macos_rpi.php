<h2>Install Lakka to the SD card</h2>

<h3>Determine your SD card drive</h3>

<p>First, you need to know wich drive is your SD card.</p>

<p>Open a Console and list your current drives and partitions with:</p>

<code><pre>$ diskutil list</pre></code>

<p>This command should output something similar to this:</p>

<p><img src="images/diskutil1.png" /></p>

<p>In my case, <em>disk0</em> is my hard drive, and <em>disk0s1</em> to <em>disk0s5</em> are my partitions.</p>

<p>Now plug your SD card, and type again:</p>

<code><pre>$ diskutil list</pre></code>

<p><img src="images/diskutil2.png" /></p>

<p>Notice that a new disk called <em>disk1</em> appeared.</p>

<p>This means that <em>disk1</em> represents the SD card reader on my Macbook. On yours, it can be a different identifier. Please adapt the rest of this tutorial to your drive identifier.</p>

<h3>Flash the image</h3>

<p>Now that you know your SD card drive, go where you extracted Lakka, and flash the card.</p>

<p>Please note that <em>dd</em> is a very dangerous command: if you give it the wrong drive identifier, it could erase your hard drive instead of the SD card!</p>

<code><pre>$ sudo dd if=Lakka-*.img of=/dev/diskN</pre></code>

<p>Where <em>diskN</em> is your SD card drive.</p>

<p><img src="images/macosdd.png" /></p>

<p>It should take a few minutes untils the prompt is given back. Once done, you can unplug your SD card and proceed to the next step.</p>

<p>If you get this error:</p>

<code><pre>dd: /dev/disk4s1: Resource busy</pre></code>

<p>You have to unmount every partitions of your SD card:</p>

<code><pre>diskutil unmount /dev/diskNs1</pre></code>

<p>And retry the <em>dd</em> step.</p>