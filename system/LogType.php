<?php

namespace hillel_01_04\system;
enum LogType: string
{
    case INFO = 'info';
    case ACTION = 'action';
    case ERROR = 'error';
}
