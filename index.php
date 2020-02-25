<style>
.card-tool .input-text {
	 outline:none;
	 border: 0px solid #d3d3d3;
	 width: 100%;
	 height: 100px;
	 padding: 10px;
	 border: 2px solid #d3d3d3;
	 color: #111;
	 transition: 0.5s;
}
.card-tool input[type=submit] {
	 background: #005cff;
	 border: none;
	 width: 30%;
	 height: 25px;
	 box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
	 color: #fff;
	 font-size: 15px;
	 margin: 5px;
	 padding: 0 5px 0 5px;
	 float: right;
	 outline: none;
	 border-radius: 20px;
}
 </style>
<div class="card card-body card-tool mb-5">
	<div class="text-center" id="result"></div>
	<form method="get" autocomplete="off">
	<textarea class="input-text rounded-lg" placeholder="Enter your address" name="address" required="required"></textarea>
	<input type="submit">
</form>
</div>
