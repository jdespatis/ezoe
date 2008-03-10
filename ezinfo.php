<?php
//
// ## BEGIN COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
// SOFTWARE NAME: eZ Online Editor MCE
// SOFTWARE RELEASE: 1.x
// COPYRIGHT NOTICE: Copyright (C) 1999-2008 eZ Systems AS
// SOFTWARE LICENSE: GNU General Public License v2.0
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
//
//
// ## END COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
//

class ezoeInfo
{
    static function info()
    {
        return array( 'Name'      => 'eZ Online Editor MCE Editor',
                      'Version'   => '0.96',
                      'Copyright' => 'Copyright � 2008 eZ Systems AS',
                      'License'   => 'GNU General Public License v2.0',
                      'Includes the following third-party software' => array( 'Name' => 'TinyMce Javascript HTML WYSIWYG editor',
                                                                              'Version' => '3.0.4.1',
                                                                              'Copyright' => 'Copyright © 2004-2008, Moxiecode Systems AB, All rights reserved.',
                                                                              'License' => 'GNU Lesser General Public License v2.1',),
                      'Includes the following library'              => array( 'Name' => 'eZ Core, tiny javascript library for ajax and stuff',
                                                                              'Version' => '0.92',
                                                                              'Copyright' => 'Copyright © 2008 eZ Systems AS',
                                                                              'License' => 'Licensed under the MIT License',)
                    );
    }
}

?>