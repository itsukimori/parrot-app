<template>
    <!-- 未入力時の表示 -->
    <div v-if="optionUnfilled">
        <!-- トースト Bootstrap-->
        <div class="toast" id="myToast" style="z-index: 10000; position: absolute; top: 100px; right: 10px;">
            <div class="toast-header">
                <strong class="me-auto">全て選択して下さい</strong>
                <small></small> <!--サブタイトル-->
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="閉じる"></button>
            </div>
            <div class="toast-body">
                {{ optionUnfilledText }}
            </div>
        </div>
    </div>
    <div class="container text-center">
        <!-- セレクトオプション　選択後、非表示 -->
        <div class="drawingContent-margin" v-if="selectOption">
            <div class="row">
                <div class="col-12 col-md-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">部位: {{ optionBodyparts }}</h5>
                            <p class="card-text">{{ optionBodypartsText }}</p>
                            <select v-model="selectedParts" name="" id="" class="form-select w-100" @change="onOptionBodyparts">
                                <option value="hand">手</option>
                                <option value="face">顔</option>
                                <option value="foot">足</option>
                            </select>
                        </div>
                    </div>    
                </div>
                <div class="col-12 col-md-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">枚数: {{ optionSheets }}</h5>
                            <p class="card-text">{{ optionSheetsText }}</p>
                            <select v-model="selectedSheets" name="" id="" class="form-select w-100" @change="onOptionSheets">
                                <option value="6">5</option>
                                <option value="11">10</option>
                                <option value="21">20</option>
                                <option value="31">30</option>
                            </select>
                        </div>
                    </div>    
                </div>
                <div class="col-12 col-md-4 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">時間: {{ optionTime }}</h5>
                            <p class="card-text">{{ optionTimeText }}</p>
                            <select v-model="selectedTime" name="" id="" class="form-select w-100" @change="onOptionTime">
                                <!-- <option value="5000">5</option> -->
                                <option value="30000">30</option>
                                <option value="60000">60</option>
                                <option value="90000">90</option>
                                <option value="120000">120</option>
                                <option value="180000">180</option>
                                <option value="300000">300</option>
                            </select>
                        </div>
                    </div>    
                </div>
            </div>
            <button v-on:click="startAction" type="button" class="btn btn-outline-dark drawingContent-startButton" onclick="showToast()">START</button>
        </div>
        <!-- 画像表示 　指定枚数表示後、非表示-->
        <div v-if="showImage">
            <div class="drawingContent-container">
                <div class="drawingContent-border">
                    <div class="">
                        <img :src="imageSrc" alt="" class="drawingContent-image">
                    </div>
                </div>    
            </div>
        </div>
        <!-- カウンドダウン　スキップ -->
        <div v-if="countdown" class="drawingContent-contentStatus">
            <!-- 残り秒数表示 -->
            <h1 class="drawingContent-countdown">残り：{{ countdownValue }}秒</h1>
            <!-- 画像スキップ処理 -->
            <button @click="skipToNextImage" class="btn btn-outline-dark drawingContent-skipButton">次の画像へ</button>
        </div>
        <!-- 進捗タイム -->
        <div v-if="displayProgress">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" :aria-valuenow="progressValue" aria-valuemin="0" aria-valuemax="100" :style="{ width: progressValue + '%' }"></div>
            </div>
        </div>
        <!-- 画像非表示後の表示 -->
        <div v-if="finishContent" class="drawingContent-margin">
            <h1>終 了</h1>
            <div class="drawingContent-finishButton">
                <button @click="redirectToDrawing" class="btn btn-outline-dark">もう一度ドローイング</button>
                <button @click="redirectToIndex" class="btn btn-outline-dark">トップページへ戻る</button>
            </div>
            <!-- 表示画像一覧 -->
            <div class="container">
                <button @click="imageListDisplay" type="button" class="btn btn-link">画像表示</button>
                <div v-if="finishImagesList">
                    <button @click="saveImages" class="btn btn-primary drawingContent-downloardBTN" type="submit">
                        <!-- アイコン -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                        </svg>
                        DOWNLOAD
                    </button>
                    <div class="row">
                        <div v-for="(image, index) in finishImages" :key="index" class="col-md-4">
                            <img :src="image" class="img-fluid" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>
export default {
    props: {
        imageData:{
            type:Object
        },
    },
    name: 'image-data',
    data() {
        return {
            imageSrc: '',
            stopButton: false,
            selectOption: true,
            showImage: false,
            countdown: false,
            countdownValue: 0,
            finishContent: false,
            optionBodyparts: null,
            optionBodypartsText: '選択してください',
            optionSheets: null,
            optionSheetsText: '選択してください',
            optionTime: null,
            optionTimeText: '選択してください',
            optionUnfilled: false,
            optionUnfilledText: '',
            skip: false,
            aryValue: 0,
            roops: null,
            countdownRoops: null,
            imagePathAry: [],
            finishImagesList: false,
            finishImages: null,
            displayProgress: false,
            progressValue: 100,
            countdownValueFixed: null,
        }
    },
    methods: {
        startAction: function(){
            // 未入力確認の処理
            if(this.selectedParts == null || this.selectedSheets == null || this.selectedTime == null) {
                let unfilledText = '';
                if(this.selectedParts == null) {
                    unfilledText += '部位 ';
                }
                if(this.selectedSheets == null) {
                    unfilledText += '枚数 ';
                }
                if(this.selectedTime == null) {
                    unfilledText += '時間 ';
                }
                this.optionUnfilled = true;
                this.optionUnfilledText = `以下のオプションが未選択です: ${unfilledText}`
            } else {
            // すべてのオプションが選択されている場合の処理
                
                if(this.optionUnfilled = true) {
                    this.optionUnfilled = false
                }

                this.selectOption = false;
                // イメージパスの追加
                if(this.selectedParts == 'hand'){ //hand
                    var imagePathObj =  this.imageData.filter(function(elem) {
                        return elem.body_parts == "hand";
                    });
                } else if(this.selectedParts == 'face'){ //face
                    var imagePathObj =  this.imageData.filter(function(elem) {
                        return elem.body_parts == "face";
                    });
                } else if(this.selectedParts == 'foot'){ //face
                    var imagePathObj =  this.imageData.filter(function(elem) {
                        return elem.body_parts == "foot";
                    });
                }
                //パスのみを配列化
                var imagePath = imagePathObj.map((path)=>{
                    return path.image_path
                })
                //配列をシャッフル
                function arrayShuffle(array) {
                    for(let i = (array.length - 1); 0 < i; i--){
                        let r = Math.floor(Math.random() * (i + 1));
                        let tmp = array[i];
                        array[i] = array[r];
                        array[r] = tmp;
                    }
                    return array;
                }
                var shuffleImagePath = arrayShuffle(imagePath)
                var selectedSheetsValue = shuffleImagePath.slice(0, this.selectedSheets);
                // 指定文字列リプレイス
                var imageRep = selectedSheetsValue.map(item => item.replace("/var/www/html/public", ""));
                // パスの配列をdisplayImageに渡す
                this.imagePathAry = imageRep;
                this.displayImage(this.imagePathAry);

                this.imagePathAry.pop(); // 配列の最後の要素を削除
                this.finishImages = this.imagePathAry
                console.log(this.finishImages)
                return; 
            }         
        },
        displayImage: function(imagePathAry) {
            this.showImage = true;
            this.countdown = true;
            this.skip = true;
            this.displayProgress = true;
            this.imageSrc += imagePathAry[this.aryValue]
            this.aryValue++;
            this.roops = setInterval(()=>{
                this.changeImage(imagePathAry);
            }, this.selectedTime);
            this.countDownTime();
            },
        changeImage: function(imagePathAry) {
            const image = imagePathAry[this.aryValue]
            this.imageSrc = ''
            this.imageSrc += image
            this.aryValue++
            // 終了処理
            if(this.aryValue >= this.selectedSheets){
                clearInterval(this.roops)
                this.countdown = false
                this.showImage = false
                this.finishContent = true
            }
        },
        skipToNextImage: function() {
            clearInterval(this.roops);
            this.changeImage(this.imagePathAry);
            this.countDownTime();
            this.progressValue = 100
            this.roops = setInterval(()=>{
                this.changeImage(this.imagePathAry);
            }, this.selectedTime);
        },
        countDownTime: function() {
            // Clear existing interval
            if (this.countdownRoops) {
                clearInterval(this.countdownRoops);
            }
            // カウントダウン
            this.countdownValue = this.selectedTime / 1000
            // 進捗バー
            this.countdownValueFixed = this.selectedTime / 1000
            this.countdownRoops = setInterval(() => {
                // 進捗バー
                this.progressValue = (this.countdownValue / this.countdownValueFixed) * 100
                this.countdownValue--;
                if (this.countdownValue <= 0) {
                    this.countdownValue = this.selectedTime / 1000
                    this.progressValue = 0
                }
                if(this.aryValue >= this.selectedSheets){
                    clearInterval(this.countdownRoops)
                    this.countdown = false
                    this.countdownValue = null
                    this.progressValue = 0
                }
            }, 1000);
            return; 
        },
        // リダイレクトボタン
        redirectToIndex() {
            window.location.href = '/';
        },
        redirectToDrawing() {
            window.location.href = '/drawing';
        },
        // 選択オプション動的表示テキスト
        onOptionBodyparts(event) {
            switch(event.target.value) {
                case 'hand':
                    this.optionBodyparts = '手';
                    this.optionBodypartsText = '手の形は複雑で描くのが難しいですが、継続的な練習で成長できます。'
                    break;
                case 'face':
                    this.optionBodyparts = '顔';
                    this.optionBodypartsText = '顔は表情など、人間の印象を大きく左右する部位であるため、非常に重要です。'
                    break;
                case 'foot':
                    this.optionBodyparts = '足';
                    this.optionBodypartsText = '角度や形状によって描きづらい部位でもありますが、継続的な練習で上達できます。'
                    break;
            }
        },
        onOptionSheets(event) {
            var elem = event.target.value -1;
            this.optionSheets = elem;
            this.optionSheetsText = elem + '枚の画像が指定秒数ごとに切り替わります。'
        },
        onOptionTime(event) {
            var elem = event.target.value / 1000 + '(秒)';
            this.optionTime = elem;
            this.optionTimeText = elem + '秒ごとに画像が切り替わります。'
        },
        imageListDisplay() {
            this.finishImagesList = true;
        },
        // 画像を保存
        async saveImages() {
            for (const image of this.finishImages) {
                const response = await fetch(image);
                const blob = await response.blob();
                const url = URL.createObjectURL(blob);

                const link = document.createElement('a');
                link.href = url;
                link.download = image.split('/').pop();
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);

                URL.revokeObjectURL(url);
            }
        }
    },
}
</script>