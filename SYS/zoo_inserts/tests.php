<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'arconn.php';
require_once './utilits.php';


$apartments =  ' {
    "60cdd345-2a07-4b98-8995-5144fbdf12ce": {
        "0": {
            "file": "images\/for_base\/0001.jpg",
            "title": "",
            "link": "",
            "target": "0",
            "rel": ""
        }
    },
    "4c101429-3f7d-4725-9571-2874a2396ce4": {
        "0": {
            "value": "\u043e\u043f\u0438\u0441\u0430\u043d\u0438\u0435"
        }
    },
    "b03b9f3b-0145-42a0-8186-a2ef727a0095": {
        "0": {
            "value": "\u041d\u0410\u041e"
        }
    },
    "4c749dae-12ae-49d1-a960-05862a5aa834": {
        "0": {
            "value": "\u041b\u0435\u043d\u0438\u043d\u0441\u043a\u0438\u0439 \u043c\u0443\u043d\u0438\u0446\u0438\u043f\u0430\u043b\u044c\u043d\u044b\u0439 \u0440\u0430\u0439\u043e\u043d"
        }
    },
    "4e902814-8e27-4060-913b-da18b4d0ce5a": {
        "0": {
            "value": "\u0422\u0451\u043f\u043b\u044b\u0439 \u0421\u0442\u0430\u043d"
        }
    },
    "c8f3daff-ddaa-43ef-a989-c46870fd1e03": {
        "0": {
            "value": "\u0411\u0443\u0442\u043e\u0432\u043e"
        }
    },
    "e6f93c73-1ca4-4356-881a-2dcd5b1d1ddc": {
        "0": {
            "value": "\u041d\u0435\u0442"
        }
    },
    "8d43b790-dae4-424e-979d-b5c74533c0bd": {
        "0": {
            "value": "\u0418\u041d\u041e\u0415"
        }
    },
    "5d81538d-07c3-49f6-96d3-b410fbd4b3a6": {
        "option": {
            "0": "ipoteka",
            "1": "rassrochka"
        },
        "check": "1"
    },
    "7f1afa0e-0c7e-47e7-aebe-5d8cd0cdc248": {
        "0": {
            "value": "\u0441\u0431\u0435\u0440 \u0431\u0430\u043d\u043a"
        }
    },
    "fc80d99f-a73e-4bf6-a2ce-87aacb7f0e4a": {
        "0": {
            "value": "\u041d\/\u0414"
        }
    },
    "12d66e25-0895-450f-ab7b-13a48a9dadf0": {
        "0": {
            "value": "\u0417\u0410\u041e \"\u041c\u0430\u0441\u0448\u0442\u0430\u0431\""
        }
    },
    "0b671e6a-07e4-481c-9a1c-73ecf3d0128c": {
        "0": {
            "value": "{slider=\u041f\u0440\u043e\u0434\u0430\u0432\u0435\u0446 1}<p>\u0413\u041a \u00ab\u041c\u0430\u0441\u0448\u0442\u0430\u0431\u00bb<\/p>{\/slider}<br \/>{slider=\u041f\u0440\u043e\u0434\u0430\u0432\u0435\u0446 2}<p> \u041d\u0435\u0434\u0432\u0438\u0436\u0438\u043c\u043e\u0441\u0442\u044c \u041f\u043e\u0434\u043c\u043e\u0441\u043a\u043e\u0432\u044c\u044f<\/p>{\/slider}<br \/>"
        }
    },
    "16c13e4d-a52f-4136-9f05-c2038ecf7051": {
        "0": {
            "value": "99999"
        },
        "1": {
            "value": "99999"
        },
        "2": {
            "value": "99999"
        },
        "3": {
            "value": "99999"
        },
        "4": {
            "value": "99999"
        },
        "5": {
            "value": "99999"
        },
        "6": {
            "value": "99999"
        },
        "7": {
            "value": "99999"
        },
        "8": {
            "value": "93"
        },
        "9": {
            "value": "140"
        },
        "10": {
            "value": "99999"
        },
        "11": {
            "value": "99999"
        },
        "12": {
            "value": "99999"
        },
        "13": {
            "value": "99999"
        },
        "14": {
            "value": "99999"
        },
        "15": {
            "value": "99999"
        },
        "16": {
            "value": "99999"
        },
        "17": {
            "value": "99999"
        },
        "18": {
            "value": "93"
        },
        "19": {
            "value": "140"
        }
    },
    "63a75c60-1a3d-4d85-92d2-91c6daf17361": {
        "0": {
            "value": "\u043e\u0442 1 286 550 \u0434\u043e 2 775 220"
        }
    },
    "cdcbe10d-34f0-46d5-bcad-a31bf7aaf86c": {
        "0": {
            "value": "0"
        },
        "1": {
            "value": "0"
        },
        "2": {
            "value": "0"
        },
        "3": {
            "value": "0"
        },
        "4": {
            "value": "0"
        },
        "5": {
            "value": "0"
        },
        "6": {
            "value": "0"
        },
        "7": {
            "value": "0"
        },
        "8": {
            "value": "0"
        },
        "9": {
            "value": "0"
        },
        "10": {
            "value": "0"
        },
        "11": {
            "value": "0"
        },
        "12": {
            "value": "0"
        },
        "13": {
            "value": "0"
        },
        "14": {
            "value": "0"
        },
        "15": {
            "value": "0"
        },
        "16": {
            "value": "0"
        },
        "17": {
            "value": "0"
        },
        "18": {
            "value": "0"
        },
        "19": {
            "value": "0"
        }
    },
    "ba0049b7-1644-4090-b5f5-f8b0f35b9a83": {
        "0": {
            "value": "0"
        },
        "1": {
            "value": "0"
        },
        "2": {
            "value": "0"
        },
        "3": {
            "value": "0"
        },
        "4": {
            "value": "0"
        },
        "5": {
            "value": "0"
        },
        "6": {
            "value": "0"
        },
        "7": {
            "value": "0"
        },
        "8": {
            "value": "0"
        },
        "9": {
            "value": "0"
        },
        "10": {
            "value": "0"
        },
        "11": {
            "value": "0"
        },
        "12": {
            "value": "0"
        },
        "13": {
            "value": "0"
        },
        "14": {
            "value": "0"
        },
        "15": {
            "value": "0"
        },
        "16": {
            "value": "0"
        },
        "17": {
            "value": "0"
        },
        "18": {
            "value": "0"
        },
        "19": {
            "value": "0"
        }
    },
    "341a5167-4286-47ca-bd32-331ccd7ad730": {
        "0": {
            "value": "\u041d\/\u0414"
        }
    },
    "9f21bba0-f1c9-447c-b763-93df10a2bf83": {
        "0": {
            "value": 1
        }
    },
    "15b23f74-510a-4a1d-bc34-f4fffa7b7e33": {
        "0": {
            "votes": 0,
            "value": 0
        }
    },
    "ac30381a-b9ae-4fc2-97d2-caf90fa36413": {
        "0": {
            "value": 1
        }
    },
    "b489ccc4-8e3f-4c5a-a12f-bd6967c1692c": {
        "0": {
            "file": "images\/sampledata\/fruitshop",
            "title": "",
            "download_limit": "",
            "hits": "0"
        }
    },
    "551d22eb-25f2-4f58-90de-0b50f944b0db": {
        "location": "37.438961,55.596597",
        "width": "",
        "height": "",
        "zoom": "0",
        "ballun": "\u0412\u044f\u0437\u0435\u043c\u0441\u043a\u043e\u0435"
    },
    "e44688db-6d22-46e1-8a48-5f9d332af8cb": {
        "location": "55.596597,37.438961"
    },
    "b62240c6-b10f-4d55-ac51-1064433444f2": {
        "value": "mos3"
    },
    "e13808c5-1599-4a5c-a743-038058243c03": {
        "0": {
            "value": "\u041c\u043e\u043d\u043e\u043b\u0438\u0442\u043d\u043e-\u043a\u0430\u0440\u043a\u0430\u0441\u043d\u044b\u0439"
        }
    },
    "96e8de5e-a9bf-4fda-bb2b-02fa6aef46c9": {
        "0": {
            "value": "\u041d\/\u0414"
        }
    },
    "cc2a280a-20ea-4667-9d8a-1d6246ecd515": {
        "0": {
            "value": "\u041c\u0410\u041b\u041e\u042d\u0422\u0410\u0416\u041d\u042b\u0419"
        }
    },
    "4010b6b9-2e40-4dcf-b499-65d53671d2d8": {
        "0": {
            "value": "\u0421\u0442\u0440\u043e\u0438\u0442\u0441\u044f"
        }
    },
    "4a9ee8f0-b282-4b13-9df8-832498a2dcc8": {
        "0": {
            "value": "\u041d\/\u0414"
        }
    },
    "ff35216a-f722-49a4-b47d-33b2d5831e96": {
        "0": {
            "value": "\u041d\u0415\u0422"
        }
    },
    "72d13fe0-3955-463f-b98e-4e1b1d468d61": {
        "0": {
            "value": 109
        }
    }
}';

$ar = json_decode($apartments,true);

echo $ar['5d81538d-07c3-49f6-96d3-b410fbd4b3a6']['option']['0'];
echo $ar['5d81538d-07c3-49f6-96d3-b410fbd4b3a6']['option']['1'];
echo "<pre>";
print_r($ar);

?>
