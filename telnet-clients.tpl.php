<?php 

/**************************************************
 * @file telnet-clients.tpl.php
 * Variables : 
 * $path = path to the module
 * $telnet_links = array of links : (SyncTerm, 
 * Termix, mTelnet, Qodem, QModem are the keys, 
 * if the value = 0 this means we don't want it 
 * to show.  Taken from config page.)
 *************************************************/

?>
<table class="telnet-table-link-block">
        <tbody>
               <?php if( $telnet_links['SyncTerm'] != '0' ) { ?>
                <tr>
                        <td class="img">
                                <a href="http://syncterm.bbsdev.net/" target="_blank">
                                        <img alt="SyncTerm" src="/<?php print $path ?>/images/syncterm.png" />
                                </a>
                        </td>
                        <td>
                                <a href="http://syncterm.bbsdev.net/" target="_blank">SyncTERM</a>
                                is available for *nix/osx/win32 and a bunch of other oses.
                        </td>

                </tr>
                <?php } ?>
                <?php if( $telnet_links['Termix'] != '0' ) { ?>
                <tr>
                        <td class="img">
                                <a href="http://sourceforge.net/projects/termix/" target="_blank">
                                        <img class="termix" alt="mTelnet (OS/2, Win32)" src="/<?php print $path ?>/images/termix.png" />
                                </a>
                        </td>
                        <td><a href="http://sourceforge.net/projects/termix/" target="_blank">Termix</a> is available for *nix</td>
                </tr>
                <?php } ?>
                 <?php if( $telnet_links['mTelnet'] != '0' ) { ?>
                <tr>
                        <td class="img">
                                <a href="http://mt32.bbses.info/" target="_blank">
                                        <img alt="mTelnet (OS/2, Win32)" src="/<?php print $path ?>/images/mtel.png" />
                                </a>
                        </td>
                        <td><a href="http://mt32.bbses.info/" target="_blank">mTelnet</a> is available for os2/win32.</td>
                </tr>
                <?php } ?>
                <?php if( $telnet_links['Qodem'] != '0' ) { ?>
                <tr>
                        <td class="img">
                                <a href="http://sourceforge.net/projects/qodem/" target="_blank">
                                        <img alt="Qodem (*nix, OS/2, Win32)" src="/<?php print $path ?>/images/qodem.png" />
                                </a>
                        </td>
                        <td><a href="http://sourceforge.net/projects/qodem/" target="_blank">Qodem</a> is available for *nix/osx/win32.</td>
                </tr>
                <?php } ?>
                 <?php if( $telnet_links['QModem'] != '0' ) { ?>
                <tr>
                        <td class="img">
                                <a href="http://qodem.sourceforge.net/about.html#qmodem" target="_blank">
                                        <img alt="QModem (DOS, Windows)" src="/<?php print $path ?>/images/qmodem.png" />
                                </a>
                        </td>
                        <td><a href="http://qodem.sourceforge.net/about.html#qmodem" target="_blank">QModem</a> is available for DOS/Win.</td>
                </tr>
                <?php } ?>

        </tbody>
</table>
