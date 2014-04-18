<h2>Create your installation medium</h2>

<p>To setup Lakka on a PC, you have to create a Live USB installer. You need a USB pendrive of at least 512mo. All data on this drive will be completely lost.</p>

<h3>Determine your USB drive</h3>

<p>First, you need to know wich drive is your USB pen.</p>

<p>Open a Console and list your current drives and partitions with:</p>

<code><pre>$ diskutil list</pre></code>

<p>This command should output something similar to this:</p>

<p><img src="images/diskutil1.png" /></p>

<p>In my case, <em>disk0</em> is my hard drive, and <em>disk0s1</em> to <em>disk0s5</em> are my partitions.</p>

<p>Now plug your USB pen, and type again:</p>

<code><pre>$ diskutil list</pre></code>

<p><img src="images/diskutil2.png" /></p>

<p>Notice that a new disk called <em>disk1</em> appeared.</p>

<p>This means that <em>disk1</em> represents the USB pen on my Macbook. On yours, it can be a different identifier. Please adapt the rest of this tutorial to your drive identifier.</p>

<h3>Flash the image</h3>

<p>Now that you know your USB drive, go where you extracted Lakka, and flash the drive.</p>

<p>Please note that <em>dd</em> is a very dangerous command: if you give it the wrong drive identifier, it could erase your hard drive instead of the USB drive!</p>

<code><pre>$ sudo dd if=Lakka-*.img of=/dev/diskN</pre></code>

<p>Where <em>diskN</em> is your USB drive.</p>

<p><img src="images/macosdd.png" /></p>

<p>It should take a few minutes untils the prompt is given back. Once done, you can unplug your USB pen and proceed to the next step.</p>

<p>If you get this error:</p>

<code><pre>dd: /dev/disk4s1: Resource busy</pre></code>

<p>You have to unmount every partitions of your USB drive:</p>

<code><pre>diskutil unmount /dev/diskNs1</pre></code>

<p>And retry the <em>dd</em> step.</p>