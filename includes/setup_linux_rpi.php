<h3>Determine your SD card drive</h3>

<p>First, you need to know wich drive is your SD card.</p>

<p>List your current drives and partitions:</p>

<code><pre>$ ls -l /dev/sd*</pre></code>

<p>You will see a list of files, in my case:</p>

<code><pre>brw-rw---- 1 root disk  8,  0 22 mars  23:01 /dev/sda
brw-rw---- 1 root disk  8,  1 22 mars  23:01 /dev/sda1
brw-rw---- 1 root disk  8,  2 22 mars  23:01 /dev/sda2
brw-rw---- 1 root disk  8,  3 22 mars  23:01 /dev/sda3
brw-rw---- 1 root disk  8,  4 22 mars  23:01 /dev/sda4
brw-rw---- 1 root disk  8,  5 22 mars  23:01 /dev/sda5
brw-rw-r-- 1 root users 8, 16 22 mars  23:01 /dev/sdb</pre></code>

<p>Those ending with numbers are partitons. Others are drives. In my case, <em>sda</em> is my hard drive, and <em>sda1</em> to <em>sda5</em> are my partitions.</p>

<p>Now plug your SD card, and type again:</p>

<code><pre>$ ls -l /dev/sd*</pre></code>

<code><pre>brw-rw---- 1 root disk  8,  0 22 mars  23:01 /dev/sda
brw-rw---- 1 root disk  8,  1 22 mars  23:01 /dev/sda1
brw-rw---- 1 root disk  8,  2 22 mars  23:01 /dev/sda2
brw-rw---- 1 root disk  8,  3 22 mars  23:01 /dev/sda3
brw-rw---- 1 root disk  8,  4 22 mars  23:01 /dev/sda4
brw-rw---- 1 root disk  8,  5 22 mars  23:01 /dev/sda5
brw-rw-r-- 1 root users 8, 16 22 mars  23:49 /dev/sdb
brw-rw---- 1 root disk  8, 17 22 mars  23:49 /dev/sdb1
brw-rw---- 1 root disk  8, 18 22 mars  23:49 /dev/sdb2</pre></code>

<p>Notice that <em>sdb</em> is now filled with one or more partitions. In my case, <em>sdb1</em> and <em>sdb2</em></p>

<p>This means that <em>sdb</em> represents the SD card reader on my laptop. On yours, it can be a different letter. Please adapt the rest of this tutorial to your drive letter.</p>

<h3>Flash the image</h3>

<p>Now that you know your SD card drive, go where you extracted Lakka, and flash the card.</p>

<code><pre>$ sudo dd if=Lakka-*.img of=/dev/sdX</pre></code>

<p>Where <em>sdX</em> is your SD card drive.</p>

<p>It should take a few minutes untils the prompt is given back. Once done, you can unplug your SD card and proceed to the next step.</p>