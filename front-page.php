<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
      <div class="clearfix">
            <div style="width: 158px;">
              <img class="pull-left book" src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAAeAAD/4QONaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzA2NyA3OS4xNTc3NDcsIDIwMTUvMDMvMzAtMjM6NDA6NDIgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6Yzg2NDU4ZjItMTdmYy0zMjRjLWE5OTMtMjAxNDE2OTgzYTVhIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkY0MjA1QjE1RUM5MTExRTY5NUQ5QkUwNTQ3OEJBREY5IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkY0MjA1QjE0RUM5MTExRTY5NUQ5QkUwNTQ3OEJBREY5IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE1IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOmIwYjYyZGY4LWM3Y2QtNWU0MC1iOGYyLWQyMzFlZGUzZjFhNiIgc3RSZWY6ZG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjY2NjYwYmFjLWQ0YzItMTFlNS04MWI0LWU5MzZkMzA0ZjViMCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv/uAA5BZG9iZQBkwAAAAAH/2wCEABALCwsMCxAMDBAXDw0PFxsUEBAUGx8XFxcXFx8eFxoaGhoXHh4jJSclIx4vLzMzLy9AQEBAQEBAQEBAQEBAQEABEQ8PERMRFRISFRQRFBEUGhQWFhQaJhoaHBoaJjAjHh4eHiMwKy4nJycuKzU1MDA1NUBAP0BAQEBAQEBAQEBAQP/AABEIAOAAngMBIgACEQEDEQH/xACVAAEAAgMBAQAAAAAAAAAAAAAABAUCAwYBBwEBAQEBAQAAAAAAAAAAAAAAAAEDAgQQAAIBAwMCAwUGBAUEAwAAAAECAwARBCESBTFRQRMGYXGRIhSBMkJSIxWhscFi0XKCkrLw4SUWojMkEQACAgIBAwMDAwUBAAAAAAAAARECIRIDMUFRYVITcYEikUIEobHBMmIU/9oADAMBAAIRAxEAPwCqwJ5ENr6V1uHiqY1MlyxFzbwvXEcXkrlGwG2RfvL7O4rtcPImEKggXAsGrz8kJ/kVT2M5l8sFQelZY3qZMaMY88LOyDarIRqPC4Na5z+mSetc7kTFMm46g3H2G9OF5ZLJncS8Z9eRNmMUbbZYkOiA69fE1SZ3GnAyhG0nmRuNyHobeINdLx+X9bhQ5W3Z5yhit72NUnrEpFBBOp2zFig9q2v/AArZ1TOXhSiL+gBa+tVfIqDfYTVEORyPPYF/Gp65TEAswPcVlataPo2ejg4LctZ2VT3Hx5jruPwrb5U6m4et+NkBh8tqi5mcyPa1zXVbVs4gcv8AFvx1dtkyyxc0xkK7eyrqKZ9m+NrHwIrjRO0rrpbWuv49L4w91ccyVXjuY0lrJV8lmZckm15CQOgqoymkQXvVxyCWmqo5TSLSrS0pEahkH6mQdDT66YeNxUNpDVlx2IMlR3ru+qUtBJkaTPZh11qE08hbr16dtauM3hmQ3A0qlyYWjNj06Gpxuj6Fcn0H/wBDwXwlC5My5ZQHzbgpuI/Jbp9tUcGZyX7Zk+mHQPOZlgje9gjeat790PWnGev87Bw1xsnHXLMS7Ypd+xrDoH0N7VWxcllfr8tcfVeauQfy7vMVtvu8K0s4j6o4SbXRyl57lFhZcmFlR5EepQ3Know8VPvr6ThzRZGPFkQHdDKoZD/Q+0HSvmpi3i6aN4r391dT6Dz1OS/D5JsJbvjE+Eg+8n+ofyrjn4m0muq/saVZ1zQbo7EXJrnM3jcj6ltguvhXWyY8qiyH4itP0Up1LXPurKqtXoitSU3HZPMcdAY4WBi6iNxuAJ7dqreWys3Ll8zLcu4FgOiqOygV1bYMpUgMPhVdlcBPOwtIAPH5a0pa056HFqeDhJoZfMLr3rbF5xFtNa7OP0bAw/UdyfYbVkPRWGDcPJ/urXapEuRdHH3OcxfMjj2i3tqLkCWWcG2grs09JYii25z/AKqz/wDVcP8Au+NHavZFjk72n7nJYyMZo1A1J0Fd5h4sqY6hlsbdKiY3pvFx8iOddxMZuLmr9VAFZXru/oWqdTleUxJXfcgrneVV0QhxX0GfEjkYk+NVWd6dxcoENfXsazqrVfTB01J83auj9OrdRVkfRWH3b41PwPT8GGLJf7TXXK9qwgqtM0ZcV16Vx3LIUdrjxr6I+EjaGqnkPTOPlXJJBPY1nxTR5WC2q30PnbuCLVaQ48n7NO1tLL/yWrs+iYb33tpVknp2FcKTG3GzgA69iDW1rrEeURUsfOlY+GhqRBkvDLHPGSs8LB43GhDKbitAa33W17GtgdSPAntXpRwfZOOzY+RwMfOQWXIjV7dmP3h9hqTZe1cV6H5YHAfjD/8AZjs0kQ/NG51t/lb+ddQJ5PymsXhtGiWEydZe1LLULz5Oxp58nY1BBOuBS9QvOk7GnmydjSRBMvS9QjM46ivPOk7UkupMLaVEy+QXFQsx+VRc1gZpOxqFnYGTmR7QQAeoPiK6pVWsk3qvJny2dKOyq7tdEjLC9S4mZL5MbfP2OlWokuAa5N+Ilw5UmQC69bVbQZMzRj5TpXXNxrjh1tsmcfxua3KnvR8dl2LVpLC5NU+bz0GNLsdhemRPOYyApB8K4PnFyROzyXueledPZx0PQ1COxn9UY6DRgTUOX1fEL21rgnkfxJrWWJrv415Od/Q7g+shfw9tSY/VCvgy5NxeO2nvYL/Wvnt6lRSuMKZPwta/+4Gj40FdkzjOBkzru8giiBtuPUnsverUeksST5Ych1YdS6grVjNDGgVVsqILKF6AVMw5IVTdvsa4XNaT1rgolDUkLhfTOVxefDmpmRt5bWeLawEkbaOvsNq7dDDIPkYH2ePwrnRyMC2J2snS6n+lbkzcUHcj2bvXe7eWZvgX7cf1L7Yte7Fqsj5Qql9wI7nUfw1qUmehUFluD+JDcVZM3x2XYk7BXuwVo+vx+5+FefuOIPvPt99JXkml/a/0PMn5BcUx5FddetBlYuSTHFIGc3sO9qjmDIRjtGnhXDVplZO5qq62UWJxVSaz3xqutqgRfVBj5lrVqz9zRkbypPiDXdcNTiTJ5WMnvI5uKosxFya2YojaO69DXD8tHskJEpYg+Jq14nmvLgCyHpW3PWqrXW25lw2u2966HTvGlq5T1ThoYi4Go8anZfqKGNL3ue1U/I8mMuM9bEa15tXKcG8qGclNER0qMRarPLZQR41XyEE6VqjNmFTIx/4+U9rf8hUOpkJ/8dP/AKf+S0f+QjqjkwTL12+JNRjO2NKCt5Im67dTaqzHylkW4ax8VPQ1NgniEf6h2m/S/XtevNq0e5X2JmXxuW0QzeN//QnV4k+8R4hkHj7RVaM9o22yBk/tcFSPjVjjZawMXxpNoP4QelXXH8hFMwE9mNvnL/N7hr3rpcnlFVX1T+xR4+ftN4pbaXA6i1W+HyF2s3ygizWOnvA71uzcb0zI12xgJm0LwExn/wCOn8K5ZXkjlIR9ybiAT4gHStJarsspl9LKDpsxpVVp2kH0yLuaVQWI9m0a3qhyObS22JWbszHU/CpGJyM0D3DkA+Fb8jD47OfdHfGyH/HGND7Sv3f5VwtW84K9ksEDjufkinBkvoRY+K+6u2j5f6iNZIE8zcLtt8CK5Of09nEB0RJWXq8JHzjwJjNiD3rTi5+XxWQqvuiN9AwIF/trarS/B9P2sx5KbqZ/Jdy75H1U+GxRsZr971R5PqTKyr7AUHvpzM2Rm5BkMO2O11ZdQaqHimDDYpt46V3aj8SeRNJtNx2E8uRO12NepNLGtjWUWPNt3bT7rVsTh+XnG9cd/L/MRXLb6NQWK+WyLJJI5G46V757WsDp0tVviem8mRgJwUFtb9akTem8nFbfBIjoOocW1/jXDs+h0kvDOclglmX5VJ9wrVJhSxoN6EMel66LH5lcZ9suPv26HaviKzyvU/HO4ZsFmtoSy2pXaRbVeZOfg4HNmXdtIB9lTo/T+SMWWK5u1vD+4GrV/W+GkVocJt40sdAKkn1Zxn0Qm3D6zZuMGtt/5b1ZfgzkqeSfgs5mmjb6XJOpdANjn+9P6iqlYnMgSN0mPQFCf5WrscT0x6dxgGkjbII6vM9l+AsKmRcjwOPujwkjdk0MeLH5jfZtH9aiXq2bPk/5S+hzOPw2c4W0dmPjYgD41ZweneVvZkTY3Vi4A0/jVtFn5uYu6DHXGAPSc7pLeyNDYfaa2zR5E0Z2zlZR+GTQC3YLprT40+uAuay6EVOEgVSMrIG4jagi6A9yW61z+bwedxzNLB+rBqTtBPxHhXWCaDGhYiIHJClkZjvTd2qVxvIJl4azTR7H+6RbRrfiHsrrXVSsQT5rNy8nEYc2HkoFZxHP0s33fiOlTP23OiuwgcIQCroQ6kf6al+peO4NmM2PJ9LyHUJGNyOf71H3ffUn079cIljyZYjAPBdxIPsJAqWrS6bjR+nRmy5rJSu3kqTNk4/zBmUj2EfzreOUmlUxZUQyIGGqtZhXWBIGNi4Pv1qFyfHcU0DSMsYkBBLqfLJHa6kVnp4Zf/VP+1P0IHHLxvkCJXYKDco+u33HrarRsDCCiwU/ZrXNScZx/wBTGy5Enlsx8yMTDYLDd4/NYnSwNdDFjT5COLiEqAsTnoPZYamtle0ZefQ8/L8bc1TrPWQ2FBGR8o7gW1qwx8zHVAjjbbTUaVETCbHRDI4lZRZn1v8AA0YKR7/ZUMywZMScXVhc9jUabjN4IubHtUNkTqAQe4BFbY8zIitaUkdmXcKmO5U2uhBPp1YpN0RBudQwsfsqFk8FMGYtGdihnYkbgSPuqttb1ejnEAIyMd32gWMI3Mx8fkNrfGpOPl8flyNFi5KNKgBeNWBZb9xSDtctu+fqcLJxWYryOyRl4YVnZAV0J8G3WtWLcTgqFmYOJ5FOSk5hYRtYbigY6H7K7zIxd6FZoUyEP3lKg3H+VqhyYOC+RFI8D+dGrJFES+0IwsyLHfba1IXg6+WcutcehyWHwWZnZJjzQ+0C5kmJ8u/hZVOtXWLx8nHJ5SsjnvGuxbdtoqT9bC2mt+9I3LPcarXW2zMuiNMmUwkVWjsR4ismllYG97GrEIrDVTWQh9hqS05EYKxYZi6yRFSF6q4P9Km7pSgVrbiNSO3sqQEI8KCI3vRuSrBCh4mB3MjxqSepIqyjxoYkCoigD2CsR5o0HSvf1e5pJZMmVV8B8BWiWGKYbZFBU9dBW4JIetZiN6hJIa8XgXH6CG39oqdHjpGPkUL7qyWNxW4braiqQjSKxFvD3Co7Oi/Ibe7/AAqdIrMLCoE+GWO8k38KER7sibx07VpnEYG1TrWgQ5XmbRcL3qQuGb7je9QpDbHY66ntWpsZiCpB2kWI1H8qulgIFq98n2VSQVePl52MscUb7ok0KSAudvsYm96sP3iH7pifda400+NZGAdqeStjprSWX7lPFxxBvapsGGV8KtFgA8K2CMCkCSGkBFbhEakBBXu0UJJH8qnlVJ2im0UEkcR175db9opYVRJqCVmErOwppQHlqWr2l6A821iYwazpQGvyl7V75Y7VnSgMNgp5YrOvaA1GMVj5QvW6lALVjI6xxtI33UBY210AvWdYsdqlj4C/woDnsPkeRxxfKVyJninYyAvshmLBwmzoFIFgdRfWvH5HPyjhJKph3vjyMFRwzkyEPr0UIALg96tYOVx5U3t8nSwuGvuXf+HsOvatrchhqocyDaw3Ai/3fze7StPkUzopM/jcRs4KiDk86IY8UcICuRaPbITLuldHCuxO3y1G75v5VJy8/klznggCCJZI4lZo2Y/qRs5e4IHylanHPxQSGYqVbabgjtr7tRrWH7ljgIzXjRlLPvG1k7AjubGm6mdUXRxGzK6Pmc1p8RTFYTRo0y7GAUurHcG7ArqLfxrCLk+SlbEmY/KWmSRFjISR1UMiqxPQ9FOlXLZcamO4ISUEgnQ30sLe29YjkMQi4ckEhb2Nteh9x703r7ETS3uZV43KcrkLANsSPNNsYlXPlgJvYMulmUi3WsMfkc+OOFYogsQCs6lZGY+ZkNCQGJ0+X5v+1WR5SP5tqkgFbE3F0IDM/S4VQa2fuGOqkuSCGKlVBY6bvyj8q391N6+xDR+5kHjuTzMmXKL+UyxKxihTSRmVmX8x+XQa26mokPKZ8eIJvLRWln/UUK7yXYXZAh/Ep069OlWUR4rEkZ8aNFdjaR10shNzYnwB6gVYKQyhh0IuPDrR3rLiuHA0tCm2clXnZ3IRZvk44TygIbl0ZiTNIYzqpH3etRByWeCcgQhskQhQArgSss7R7At7LuAvfw8dK6ClRXSUaoro5nZlCmfmtKskar5s64yNIUk2jzWkD/IW/Bb/ABpDzGfLkYsTeVCJFQzFwV6s6G25hYnaNo161fVokwMOWdciSFXmW1nI/Lqvw8Ku9czUmlu1jeK9ryvazNBSlKAV4wDAqehFjXteUBD/AGzHsu4uzJYIzEEhVFgvS1qyPHYxbdY3DmQX1sWtdQGvpp0qVSgIi8bApViWdkYsrNYn5juYdPE16vHQKwdSwa23doTbW2pB6X0qVSgIv7bjeXEhUnyL+WSdVLdSP+vZXi8ZjKFVdwRNwCi1rONpB07ad6mUoCH+2QWsWkJIsW3albBdh9lhWS8fioSUUre5IBsCWBBJ9tmtUqlAQ/2zEsysm5GKkobEXX+NSkXYipcnaALk3Jt3NZUoBSlKAUpSgFKUoBSlKAVhKGMbBDZyCFPY20rOvKAqoYubjjVA6G/VnO5h38NfZW0jmbsAybRuCEWuTY7Ga46dxVhSgKyaHl2kEsbID5IjK36Mfmd10te+grxYebW4WRAPkAYnebKoU9R4nWrSlAYQ+b5SedbzbDfbpfxtWyvK9oBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoBSlKAUpSgFKUoD/2Q==" alt="Audio mastering és mixing könyv borító">
            </div>
            <div class="col-sm-8">
              <h2>
              Tanuld meg, hogy készíts <em>jobb hangzást!</em></h2>
              <h3>Ingyenes, átfogó könyv a Mixingről és Masteringről</h3>
              <p>
              A mű hangmérnöki szempontból (final mix, mixdown, "végső keverés", "lekeverés") közelít a keveréshez.
              Töltsd le a 72 oldalas <strong>INGYENES</strong> könyvet (<em>5000 Ft értékben</em>)</p>
              <div class="subscribe-container">
                <?php include_once 'subscribe.php'; ?>
              </div>
            </div>
      </div>

     <h2>Nézz bele a legnépszerűbb Youtube videókba</h2>

     <div class="container">
       <div class="col-xs-12 col-sm-6">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/EEqFeYyH5Fo?ecver=1" frameborder="0" allowfullscreen></iframe>
       </div>
       <div class="col-xs-12 col-sm-6">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/BzTnU_14aY8?ecver=1" frameborder="0" allowfullscreen></iframe>
       </div>
     </div>

     <h2>Olvasd el a legkeresettebb cikkeimet</h2>

     <div class="container">
       <div class="col-xs-12 col-sm-6">
         <p>
           <a href="/2016/11/05/mastering-munkafolyamat-deadmau5-szal/" target="_blank">
           <img src="https://c7.staticflickr.com/6/5481/30672945502_6171dcab6d_b.jpg" alt="Deadmau5, Steve Duda és a mastering folyamat">
           </a>
         </p>
         <p>
           <a href="/2016/11/05/mastering-munkafolyamat-deadmau5-szal/" target="_blank">Mastering munkafolyamat Deadmau5-szal</a>
         </p>
         <p>Az egyik videóban Deadmau5 bemutatja a mastering munkafolyamatát, melyet a Razor márka szponzorált. A zenei részlet munkacíme Imaginary Friends és az előző részek alkalmával vezetett be minket a zenekészítés fázisaiba. A Razer Youtube csatornáján megtalálható a többi videó is.</p>
       </div>
       <div class="col-xs-12 col-sm-6">
          <p>
            <a href="/2016/05/02/kreativitas-tippek/" target="_blank"><img src="https://farm2.staticflickr.com/1480/26749304176_0449288bca_b.jpg" alt="Zenei eszközök"></a>
          </p>
          <p>
            <a href="/2016/05/02/kreativitas-tippek/" target="_blank">Kreativitás tippek</a>
          </p>
          <p>Ha éppen megakadtál egy projekttel vagy szeretnéd felerősíteni a meglévő ötleteket, akkor ideje átgondolni néhány taktikát ezzel kapcsolatban.</p>
       </div>
     </div>

      <h2>Visszajelzések — könyv, cikkek, videók</h2>

          <h3>
          <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 593.641 593.641" style="enable-background:new 0 0 593.641 593.641;" xml:space="preserve">
          <g>
              <path d="M593.641,142.29c0,3.876-1.432,7.242-4.285,10.098l-385.56,385.56    c-2.448,2.856-5.712,4.284-9.792,4.284h-0.612h-0.612c-3.672,0-6.936-1.428-9.792-4.284L4.284,359.856    C1.428,356.184,0,352.717,0,349.452c0-3.264,1.428-6.729,4.284-10.403l76.5-76.5c6.936-6.12,13.872-6.12,20.808,0l91.8,92.412    L492.049,55.693c3.674-2.856,7.141-4.284,10.402-4.284c3.268,0,6.732,1.428,10.404,4.284l76.5,76.5    C592.211,135.048,593.641,138.414,593.641,142.29z" fill="#91DC5A"/>
          </g>
          </svg>
          A könyvről ezeket írták</h3>
      <figure>
        <blockquote>
        "Letisztult gondolatok, szerzői tapasztalatokra épített információk, melyek sallangmentes környezetet idézve elő, segítenek a tudásbővítésben. Külön kiemelném a DAW specifikus plugin-park leírás és magyarázat összeköttetését, ami véleményem szerint ritka jelenség egy szabad kiadványban."
        </blockquote>
        <footer>
        — <cite class="author">Bencsik Gábor</cite>
        </footer>
      </figure>

      <figure>
        <blockquote>
        "Nos, személyes véleményem szerint különösen hasznos volt, amikor hat mixing példán keresztül is bemutattad a tanultakat, ugyanis az elméletet sok helyen is látni / olvasni lehet, de konkrétan nem igazán láttam bemutatva, hogy na ezt ezért meg azért csináltam. Továbbá egy kezdő számára szerintem kifejezetten hasznos, hogy több apróbb tanácsot is megosztasz, pl. CPU erőforrások megtartása, időmenedzsment, illetve, hogy mi - milyen hatással lehet a fejlődésre."
        </blockquote>
        <footer>
        — <cite class="author">Sándor Tamás</cite>
        </footer>
      </figure>

      <figure>
        <blockquote>
        "Tisztelt Zeneszerkesztők! Nemrégiben hozzájutottam ehhez a nagyszerű anyaghoz itt a csoportban. Rengeteg dolgot lehet belőle tanulni. Érthetően, rávezetve dolgokra fogalmazza meg a témákat, az alapoktól egészen a végső fázisig Burucs Ádám kollégánk. Nekem kifejezetten tetszik a hangszínszabályozás témakör, sok érdekes dolgot tanultam belőle."
        </blockquote>
        <footer>
        — <cite class="author">Balázs Róbert</cite>
        </footer>
      </figure>

      <figure>
        <blockquote>
        "Csak mindig mással kellett csináltatni [a mixet], és így nem haladtunk. Igen, sokat segített. De ahhoz, hogy az elejetől a végéig gyakorlatban sikerüljön viszonylag profin, ahhoz más kell. De így az alapokba betekintést nyer az ember elég jó szinten. Respect érte!"
        </blockquote>
        <footer>
        — <cite class="author">Takács Péter</cite>
        </footer>
      </figure>
      <hr>

      <hr>
      <h3>
      <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 593.641 593.641" style="enable-background:new 0 0 593.641 593.641;" xml:space="preserve">
          <g>
              <path d="M593.641,142.29c0,3.876-1.432,7.242-4.285,10.098l-385.56,385.56    c-2.448,2.856-5.712,4.284-9.792,4.284h-0.612h-0.612c-3.672,0-6.936-1.428-9.792-4.284L4.284,359.856    C1.428,356.184,0,352.717,0,349.452c0-3.264,1.428-6.729,4.284-10.403l76.5-76.5c6.936-6.12,13.872-6.12,20.808,0l91.8,92.412    L492.049,55.693c3.674-2.856,7.141-4.284,10.402-4.284c3.268,0,6.732,1.428,10.404,4.284l76.5,76.5    C592.211,135.048,593.641,138.414,593.641,142.29z" fill="#91DC5A"/>
          </g>
          </svg>
      A videókról mondták</h3>

      <figure>
        <blockquote>
        "Egyre jobbak ezek a videók, jó úton haladsz! :) Jah és thx a Mac-es [letöltő] linkért is!"
        </blockquote>
        <footer>
        — <cite class="author">Chudák Róbert</cite>
        </footer>
      </figure>
      <hr>

      <h2>Részletes statisztikák</h2>
      <ul class="stats">
        <li>
          <div>
            <svg width="46" height="46" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
            <path d="M13,0c-1.547,0-3.033,0.662-4.078,1.817C7.895,2.954,7.389,4.476,7.525,6H7.5v48.958C7.5,57.738,9.762,60,12.542,60H52.5V11
                V9V0H13z M9.5,54.958V9.998c0.836,0.629,1.875,1.002,3,1.002v46.996C10.842,57.973,9.5,56.621,9.5,54.958z M50.5,58h-36V11h3v25.201
                c0,0.682,0.441,1.262,1.099,1.444c0.137,0.037,0.273,0.056,0.408,0.056c0.015,0,0.029-0.005,0.044-0.006
                c0.045-0.001,0.088-0.012,0.133-0.017c0.103-0.012,0.202-0.033,0.299-0.066c0.048-0.016,0.093-0.035,0.138-0.056
                c0.094-0.043,0.18-0.097,0.263-0.159c0.036-0.027,0.073-0.05,0.106-0.08c0.111-0.099,0.212-0.211,0.292-0.346l4.217-7.028
                l4.217,7.029c0.327,0.545,0.939,0.801,1.55,0.687c0.045-0.008,0.089-0.002,0.134-0.014c0.657-0.183,1.099-0.763,1.099-1.444V11h19
                V58z M29.64,9.483l-0.003,0.007L29.5,9.764v0.042l-0.1,0.23l0.1,0.152v0.112V34.39l-5-8.333l-5,8.333V10.236L21.118,7h9.764
                L29.64,9.483z M32.118,9l2-4H19.882l-2,4h-4.67c-1.894,0-3.516-1.379-3.693-3.14c-0.101-0.998,0.214-1.957,0.887-2.701
                C11.071,2.422,12.017,2,13,2h37.5v1h-5c-0.553,0-1,0.447-1,1s0.447,1,1,1h5v1h-4c-0.553,0-1,0.447-1,1s0.447,1,1,1h4v1H32.118z"/>
            </svg>
          </div>
          <strong>1850+</strong>
          könyvletöltés
        </li>
        <li>
          <div>
            <svg width="46" height="46" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 482.9 482.9" style="enable-background:new 0 0 482.9 482.9;" xml:space="preserve">
              <g>
                  <g>
                      <path d="M239.7,260.2c0.5,0,1,0,1.6,0c0.2,0,0.4,0,0.6,0c0.3,0,0.7,0,1,0c29.3-0.5,53-10.8,70.5-30.5
                          c38.5-43.4,32.1-117.8,31.4-124.9c-2.5-53.3-27.7-78.8-48.5-90.7C280.8,5.2,262.7,0.4,242.5,0h-0.7c-0.1,0-0.3,0-0.4,0h-0.6
                          c-11.1,0-32.9,1.8-53.8,13.7c-21,11.9-46.6,37.4-49.1,91.1c-0.7,7.1-7.1,81.5,31.4,124.9C186.7,249.4,210.4,259.7,239.7,260.2z
                           M164.6,107.3c0-0.3,0.1-0.6,0.1-0.8c3.3-71.7,54.2-79.4,76-79.4h0.4c0.2,0,0.5,0,0.8,0c27,0.6,72.9,11.6,76,79.4
                          c0,0.3,0,0.6,0.1,0.8c0.1,0.7,7.1,68.7-24.7,104.5c-12.6,14.2-29.4,21.2-51.5,21.4c-0.2,0-0.3,0-0.5,0l0,0c-0.2,0-0.3,0-0.5,0
                          c-22-0.2-38.9-7.2-51.4-21.4C157.7,176.2,164.5,107.9,164.6,107.3z"/>
                      <path d="M446.8,383.6c0-0.1,0-0.2,0-0.3c0-0.8-0.1-1.6-0.1-2.5c-0.6-19.8-1.9-66.1-45.3-80.9c-0.3-0.1-0.7-0.2-1-0.3
                          c-45.1-11.5-82.6-37.5-83-37.8c-6.1-4.3-14.5-2.8-18.8,3.3c-4.3,6.1-2.8,14.5,3.3,18.8c1.7,1.2,41.5,28.9,91.3,41.7
                          c23.3,8.3,25.9,33.2,26.6,56c0,0.9,0,1.7,0.1,2.5c0.1,9-0.5,22.9-2.1,30.9c-16.2,9.2-79.7,41-176.3,41
                          c-96.2,0-160.1-31.9-176.4-41.1c-1.6-8-2.3-21.9-2.1-30.9c0-0.8,0.1-1.6,0.1-2.5c0.7-22.8,3.3-47.7,26.6-56
                          c49.8-12.8,89.6-40.6,91.3-41.7c6.1-4.3,7.6-12.7,3.3-18.8c-4.3-6.1-12.7-7.6-18.8-3.3c-0.4,0.3-37.7,26.3-83,37.8
                          c-0.4,0.1-0.7,0.2-1,0.3c-43.4,14.9-44.7,61.2-45.3,80.9c0,0.9,0,1.7-0.1,2.5c0,0.1,0,0.2,0,0.3c-0.1,5.2-0.2,31.9,5.1,45.3
                          c1,2.6,2.8,4.8,5.2,6.3c3,2,74.9,47.8,195.2,47.8s192.2-45.9,195.2-47.8c2.3-1.5,4.2-3.7,5.2-6.3
                          C447,415.5,446.9,388.8,446.8,383.6z"/>
                  </g>
              </g>
              </svg>
          </div>
          <strong>500+</strong>
          tanácsadás
        </li>
        <li>
          <div>
            <svg width="46" height="46" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
              <g>
                  <path d="M34.437,7.413c-0.979-0.561-2.143-0.553-3.115,0.019c-0.063,0.037-0.121,0.081-0.174,0.131L17.906,19.891
                      C17.756,19.963,17.593,20,17.427,20H9.104C7.392,20,6,21.393,6,23.104v12.793C6,37.607,7.392,39,9.104,39h8.324
                      c0.166,0,0.329,0.037,0.479,0.109l13.242,12.328c0.053,0.05,0.112,0.094,0.174,0.131c0.492,0.289,1.033,0.434,1.574,0.434
                      c0.529,0,1.058-0.138,1.541-0.415C35.416,51.027,36,50.021,36,48.894V10.106C36,8.979,35.416,7.973,34.437,7.413z M34,48.894
                      c0,0.577-0.389,0.862-0.556,0.958c-0.158,0.09-0.562,0.262-1.025,0.037l-13.244-12.33c-0.054-0.051-0.113-0.095-0.176-0.131
                      C18.522,37.147,17.979,37,17.427,37H9.104C8.495,37,8,36.505,8,35.896V23.104C8,22.495,8.495,22,9.104,22h8.324
                      c0.551,0,1.095-0.147,1.572-0.428c0.063-0.036,0.122-0.08,0.176-0.131l13.244-12.33c0.465-0.226,0.868-0.053,1.025,0.037
                      C33.611,9.244,34,9.529,34,10.106V48.894z"/>
                  <path d="M41.833,17.293c-0.391,0.391-0.391,1.023,0,1.414c6.238,6.238,6.238,16.39,0,22.628c-0.391,0.391-0.391,1.023,0,1.414
                      c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c7.018-7.019,7.018-18.438,0-25.456
                      C42.857,16.902,42.224,16.902,41.833,17.293z"/>
                  <path d="M39.707,20.293c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c4.297,4.297,4.297,11.289,0,15.586
                      c-0.391,0.391-0.391,1.023,0,1.414C38.488,38.902,38.744,39,39,39s0.512-0.098,0.707-0.293
                      C44.784,33.63,44.784,25.37,39.707,20.293z"/>
                  <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                      S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
              </g>
              </svg>
          </div>
          <strong>170+</strong>
          masterelt zene
        </li>
        <li>
          <div>
            <svg width="46" height="46" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 487.867 487.867" style="enable-background:new 0 0 487.867 487.867;" xml:space="preserve">
            <path d="M482.867,99.557h-48.097v-34.83c0-2.762-2.238-5-5-5H5c-2.762,0-5,2.238-5,5v330.881c0,17.938,14.595,32.533,32.533,32.533
                h423.785c17.396,0,31.549-14.152,31.549-31.548V104.557C487.867,101.795,485.629,99.557,482.867,99.557z M477.867,396.593
                c0,11.882-9.667,21.548-21.549,21.548s-21.548-9.666-21.548-21.548v-13.847c0-2.762-2.238-5-5-5s-5,2.238-5,5v13.847
                c0,8.326,3.248,15.904,8.536,21.548H32.533C20.108,418.141,10,408.032,10,395.607V69.727h414.771V336.05c0,2.762,2.238,5,5,5
                s5-2.238,5-5V109.557h43.097V396.593z M204.111,126.105H44.822c-2.762,0-5,2.238-5,5v119.461c0,2.762,2.238,5,5,5h159.289
                c2.762,0,5-2.238,5-5V131.105C209.111,128.344,206.873,126.105,204.111,126.105z M199.111,245.566H49.822V136.105h149.289V245.566z
                 M225.659,131.105c0-2.762,2.238-5,5-5h159.289c2.762,0,5,2.238,5,5s-2.238,5-5,5H230.659
                C227.897,136.105,225.659,133.867,225.659,131.105z M225.659,170.937c0-2.762,2.238-5,5-5h159.289c2.762,0,5,2.238,5,5s-2.238,5-5,5
                H230.659C227.897,175.937,225.659,173.698,225.659,170.937z M225.659,210.768c0-2.762,2.238-5,5-5h159.289c2.762,0,5,2.238,5,5
                s-2.238,5-5,5H230.659C227.897,215.768,225.659,213.529,225.659,210.768z M230.659,255.598c-2.762,0-5-2.238-5-5s2.238-5,5-5
                h159.289c2.762,0,5,2.238,5,5s-2.238,5-5,5H230.659z M209.111,290.429c0,2.762-2.238,5-5,5H44.822c-2.762,0-5-2.238-5-5s2.238-5,5-5
                h159.289C206.873,285.429,209.111,287.667,209.111,290.429z M209.111,330.229c0,2.762-2.238,5-5,5H44.822c-2.762,0-5-2.238-5-5
                s2.238-5,5-5h159.289C206.873,325.229,209.111,327.467,209.111,330.229z M209.111,370.028c0,2.762-2.238,5-5,5H44.822
                c-2.762,0-5-2.238-5-5s2.238-5,5-5h159.289C206.873,365.028,209.111,367.267,209.111,370.028z M396.845,290.429c0,2.762-2.238,5-5,5
                H232.556c-2.762,0-5-2.238-5-5s2.238-5,5-5h159.289C394.606,285.429,396.845,287.667,396.845,290.429z M396.845,330.229
                c0,2.762-2.238,5-5,5H232.556c-2.762,0-5-2.238-5-5s2.238-5,5-5h159.289C394.606,325.229,396.845,327.467,396.845,330.229z
                 M396.845,370.028c0,2.762-2.238,5-5,5H232.556c-2.762,0-5-2.238-5-5s2.238-5,5-5h159.289
                C394.606,365.028,396.845,367.267,396.845,370.028z"/>
            </svg>
          </div>
          <strong>44</strong>
          cikk angolul
        </li>
        <li>
          <div>
            <svg width="46" height="46" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 487.867 487.867" style="enable-background:new 0 0 487.867 487.867;" xml:space="preserve">
            <path d="M482.867,99.557h-48.097v-34.83c0-2.762-2.238-5-5-5H5c-2.762,0-5,2.238-5,5v330.881c0,17.938,14.595,32.533,32.533,32.533
                h423.785c17.396,0,31.549-14.152,31.549-31.548V104.557C487.867,101.795,485.629,99.557,482.867,99.557z M477.867,396.593
                c0,11.882-9.667,21.548-21.549,21.548s-21.548-9.666-21.548-21.548v-13.847c0-2.762-2.238-5-5-5s-5,2.238-5,5v13.847
                c0,8.326,3.248,15.904,8.536,21.548H32.533C20.108,418.141,10,408.032,10,395.607V69.727h414.771V336.05c0,2.762,2.238,5,5,5
                s5-2.238,5-5V109.557h43.097V396.593z M204.111,126.105H44.822c-2.762,0-5,2.238-5,5v119.461c0,2.762,2.238,5,5,5h159.289
                c2.762,0,5-2.238,5-5V131.105C209.111,128.344,206.873,126.105,204.111,126.105z M199.111,245.566H49.822V136.105h149.289V245.566z
                 M225.659,131.105c0-2.762,2.238-5,5-5h159.289c2.762,0,5,2.238,5,5s-2.238,5-5,5H230.659
                C227.897,136.105,225.659,133.867,225.659,131.105z M225.659,170.937c0-2.762,2.238-5,5-5h159.289c2.762,0,5,2.238,5,5s-2.238,5-5,5
                H230.659C227.897,175.937,225.659,173.698,225.659,170.937z M225.659,210.768c0-2.762,2.238-5,5-5h159.289c2.762,0,5,2.238,5,5
                s-2.238,5-5,5H230.659C227.897,215.768,225.659,213.529,225.659,210.768z M230.659,255.598c-2.762,0-5-2.238-5-5s2.238-5,5-5
                h159.289c2.762,0,5,2.238,5,5s-2.238,5-5,5H230.659z M209.111,290.429c0,2.762-2.238,5-5,5H44.822c-2.762,0-5-2.238-5-5s2.238-5,5-5
                h159.289C206.873,285.429,209.111,287.667,209.111,290.429z M209.111,330.229c0,2.762-2.238,5-5,5H44.822c-2.762,0-5-2.238-5-5
                s2.238-5,5-5h159.289C206.873,325.229,209.111,327.467,209.111,330.229z M209.111,370.028c0,2.762-2.238,5-5,5H44.822
                c-2.762,0-5-2.238-5-5s2.238-5,5-5h159.289C206.873,365.028,209.111,367.267,209.111,370.028z M396.845,290.429c0,2.762-2.238,5-5,5
                H232.556c-2.762,0-5-2.238-5-5s2.238-5,5-5h159.289C394.606,285.429,396.845,287.667,396.845,290.429z M396.845,330.229
                c0,2.762-2.238,5-5,5H232.556c-2.762,0-5-2.238-5-5s2.238-5,5-5h159.289C394.606,325.229,396.845,327.467,396.845,330.229z
                 M396.845,370.028c0,2.762-2.238,5-5,5H232.556c-2.762,0-5-2.238-5-5s2.238-5,5-5h159.289
                C394.606,365.028,396.845,367.267,396.845,370.028z"/>
            </svg>
          </div>
          <strong>32</strong>
          cikk magyarul
        </li>
        <li>
          <div>
            <svg width="46" height="46" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 513.856 513.855" style="enable-background:new 0 0 513.856 513.855;"
                 xml:space="preserve">
            <g>
                <g>
                    <path d="M302.37,0.179C179.871-4.066,51.109,67.132,62.235,204.885c0.292,9.6,11.341,52.496-31.806,87.397
                        c-15.351,12.467-11.289,36.597,10.316,48.489c7.165,3.956,14.658,6.592,22.437,8.425c-1.602,8.627-0.81,17.356,3.344,25.562
                        c-10.161,19.804,3.41,37.851,15.282,42.116c5.581,2.758,1.275,12.751,1.892,21.13c1.731,24.039,30.399,35.698,48.947,32.788
                        c33.248-5.388,70.64-3.676,83.131,32.845c2.496,7.292,8.797,9.287,15.6,10.095c15.089,1.849,188.122-17.641,193.321-20.789
                        c7.252-2.26,13.106-10.38,8.425-19.129c-39.974-74.524,40.034-153.645,55.405-225.233C514.452,130.782,413.994,0.179,302.37,0.179
                        z M464.119,239.958c-16.696,76.596-89.957,150.648-60.956,230.85c-54.477,7.394-164.512,18.966-164.887,19.022
                        c-19.609-43.646-65.242-51.48-110.393-44.646c-5.964,1.179-18.725-0.203-18.385-11.836c3.712-25.649-12.756-40.345-19.261-41.924
                        c-2.445-0.798-1.424-2.001-1.462-1.966c12.263-13.781-6.198-26.339,3.168-44.097c5.708-10.826-1.627-18.027-13.688-19.692
                        c-15.021-1.625-22.952-7.257-28.157-9.562c-2.521-1.199-3.499-3.393-1.181-5.967c47.73-43.331,39.608-104.688,39.562-105.249
                        C77.694,71.416,214.071,18.633,303.685,26.422C409.712,35.974,482.039,139.996,464.119,239.958z"/>
                    <path d="M234.434,138.562c-34.777,20.962-42.051,63.048-27.68,98.871c3.433,8.559,8.95,16.021,13.182,24.163
                        c12.34,23.755,4.062,21.643,4.172,30.682c0.119,10.593,2.775,29.889,3.895,35.089c0.899,5.667,5.053,10.734,12.469,10.734
                        c85.45,0,86.872,5.286,91.518-4.854c2.742-4.626,1.762-7.83,1.762-36.054c0-13.508-13.868-1.711,11.648-36.424
                        c6.5-8.839,12.939-17.367,17.164-27.574c8.993-21.751,7.51-46.492-4.215-66.976C333.564,122.833,274.298,114.545,234.434,138.562z
                         M307.564,312.96c-18.514-0.762-37.043-0.93-55.581-0.98c-0.391-2.859-0.719-5.718-1.003-8.582
                        c18.92-0.355,37.754,0.549,56.583,2.442V312.96z M331.044,237.458c-7.57,7.914-18.945,20.035-25.526,41.962
                        c-4.515-0.432-9.028-0.803-13.543-1.117c0.035-5.2-2.895-15.671,2.147-35.224c0.158-0.604,0.219-1.171,0.27-1.731l13.563-13.566
                        c9.155-9.143-4.718-23.056-13.878-13.883l-6.668,6.66c-2.025-3.41-4.225-6.728-6.723-9.938
                        c-6.236-8.018-23.539,1.442-13.884,13.888c3.326,4.271,5.799,9.313,8.211,14.203c-3.209,12.868-3.904,25.621-2.392,38.687
                        c-6.87-0.192-13.749-0.3-20.634-0.173c-1.226-14.051-6.792-23.663-12.172-31.765c-3.255-5.294-37.534-56.939,11.641-86.582
                        c27.487-16.562,60.175-7.066,81.71,13.733C359.014,207.256,335.275,232.768,331.044,237.458z"/>
                    <path d="M175.639,185.518c-11.347-0.079-22.63-1.031-33.923-2.054c-11.893-1.082-11.789,17.44,0,18.509
                        c11.293,1.026,22.576,1.978,33.923,2.057C187.572,204.105,187.567,185.594,175.639,185.518z"/>
                    <path d="M228.863,109.912c-6.566-9.849-13.238-19.624-20.979-28.604c-7.805-9.06-20.83,4.09-13.088,13.088
                        c6.708,7.782,12.395,16.316,18.085,24.854C219.474,129.124,235.51,119.862,228.863,109.912z"/>
                    <path d="M346.076,114.106c4.891-7.825,9.79-15.645,14.391-23.643c5.962-10.367-10.028-19.68-15.975-9.344
                        c-4.606,8.003-9.501,15.828-14.396,23.644C323.753,114.924,339.769,124.201,346.076,114.106z"/>
                    <path d="M391.951,192.386c11.796-3.306,23.109-7.863,34.083-13.269c10.704-5.284,1.32-21.236-9.333-15.98
                        c-9.572,4.717-19.394,8.523-29.666,11.402C375.558,177.753,380.444,195.61,391.951,192.386z"/>
                </g>
            </g>
            </svg>

          </div>
          <strong>16</strong>
          év tapasztalat
        </li>
      </ul>

      <h2 class="about">Ismerj meg minket — rólunk röviden</h2>
      <div class="clearfix about-section">
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri(); ?>/../mastermix2016/img/adam.jpg" alt="Burucs Ádám fotó">
          <h3>Burucs Ádám<br>
          — írás, mixing, mastering, zene</h3>
          <p>A könyv szerzője és az oldal alapítója vagyok. Karrierem zongoraleckékkel kezdődött, majd jött 2001-ben a zeneszerzés, hangszín-tervezés és a <a href="https://www.facebook.com/afmastering/" target="_blank">hangmérnöki tevékenységek</a>. 2013 óta írok angol nyelvű <a href="http://tutsplus.com/authors/adam-burucs" target="_blank">szakmai cikkeket</a>.</p>
          <p>A MasteringMixing projektet 2015-ben indítottam be. Zenéimet megtalálod a <a href="https://www.youtube.com/user/AdamFiregate/videos" target="_blank">Youtube-on</a> és a <a href="https://www.beatport.com/artist/adam-firegate/142173/tracks" target="_blank">Beatporton</a> is.</p>
        </div>
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri(); ?>/../mastermix2016/img/spet.jpg" alt="Szigetvári Zsolt fotó">
          <h3>Szigetvári Zsolt<br>
          — szakmai lektorálás, zenész</h3>
          <p><a href="https://soundcloud.com/spetmusic" target="_blank">Londonban élő producer</a>, drum and bass és rap mester.</p>
        </div>
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri(); ?>/../mastermix2016/img/deepsec.jpg" alt="Dobóczi Attila fotó">
          <h3>Dobóczi Attila<br>
          — szakmai lektorálás, zenész</h3>
          <p><a href="https://soundcloud.com/deepsec" target="_blank">Deep és progi house felelős</a>. Mindig van valamilyen egyedi hangszerelési ötlete. Terek és atmoszférák megalkotója.</p>
        </div>

      </div>

      <h2 id="kapcsolat">Vedd fel velem a kapcsolatot ezeken a helyeken</h2>
      <p>
        <a href="https://www.facebook.com/groups/audiomasteringesmixing/" target="_blank">Csatlakozz a FaceBook csoporthoz!</a><br>
        <a href="/mastering/">Kérj ajánlatot fizetős mixing és mastering szolgáltatásra vagy zene kritikára!</a><br>
      </p>
      <div>
        <?php /*echo do_shortcode('[contact-form-7 id="4" title="1 kapcsolati űrlap"]');*/ ?>
      </div>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
