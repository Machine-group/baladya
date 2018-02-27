var myConfig = {
      "type": "hbar",
      "font-family": "Arial",
      "title": {
        "text": "best of 3 parts",
        "font-family": "Arial",
        "background-color": "none",
        "font-color": "#A4A4A4",
        "font-size": "18px"
      },
      
      
      "plot": {
        "bars-overlap": "100%",
        "borderRadius": 8,
        "hover-state": {
          "visible": false
        },
        "animation": {
          "delay": 300,
          "effect": 3,
          "speed": "500",
          "method": "0",
          "sequence": "3"
        }
      },
      "scale-x": {
        "line-color": "none",
        "values": ["Nahdha", "Nida", "abn"],
        "tick": {
          "visible": false
        },
        "guide": {
          "visible": false
        },
        "item": {
          "font-size": "14px",
          "padding-right": "-5px",
          "auto-align": true,
          "rules": [{
            "rule": "%i==0",
            "font-color": "#FA8452"
          }, {
            "rule": "%i==1",
            "font-color": "#FCAE48"
          }, {
            "rule": "%i==2",
            "font-color": "#FCCC65"
          }, {
            "rule": "%i==3",
            "font-color": "#A0BE4A"
          }, {
            "rule": "%i==4",
            "font-color": "#6FA6DF"
          }]
        }
      },
      "scale-y": {
        "visible": false,
        "guide": {
          "visible": false
        }
      },
      "series": [{
        "values": [100, 100, 100, 100, 100],
        "bar-width": "40px",
        "background-color": "#f2f2f2",
        "border-color": "#e8e3e3",
        "border-width": 2,
        "fill-angle": 90,
        "tooltip": {
          "visible": false
        }
      }, {
        "values": [42, 56, 77],
        "bar-width": "32px",
        "max-trackers": 0,
        "value-box": {
          "placement": "top-out",
          "text": "%v",
          "decimals": 0,
          "font-color": "#A4A4A4",
          "font-size": "14px",
          "alpha": 0.6
        },
        "rules": [{
          "rule": "%i==0",
          "background-color": "#FA8452"
        }, {
          "rule": "%i==1",
          "background-color": "#FCAE48"
        }, {
          "rule": "%i==2",
          "background-color": "#FCCC65"
        }, {
          "rule": "%i==3",
          "background-color": "#A0BE4A"
        }, {
          "rule": "%i==4",
          "background-color": "#6FA6DF"
        }]
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: 300,
      width: 480
     
    });