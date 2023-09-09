<?php include 'head.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Voter's Name</label>
            <input type="text" name="vname" required/>
        </div>
        <div class="form-group">
            <label>State</label>
            <input type="text" name="state" required/>
        </div>
		<div class="form-group">
            <label>L.G.A</label>
            <input type="text" name="local" required/>
        </div>
        <div class="form-group">
            <label>Candidate's Party</label>
            <select name="party" required>
                <option value="" selected disabled>Select Party</option>
				<option value="PCA" >PCA</option>
				<option value="MMA" >MMA</option>
				<option value="WWE" >WWE</option>
				<option value="NAC" >NAC</option>
				<option value="BAD" >BAD</option>
            </select>
        </div>
        <div class="form-group">
            <label>Candidate's Name</label>
            <select name="cname" required>
                <option value="" selected disabled>Select Name</option>
				<option value="HAMZA SANUSI" >Hamza Sanusi</option>
				<option value="SUCCESS AGBOR" >Success Agbor</option>
				<option value="FRANCIS UDOH" >Francis Udoh</option>
				<option value="SALIM MICHAEL" >Salim Michael</option>
				<option value="VINCENT CHUKWU" >Vincent Chukwu</option>
				<option value="PRISCILLIA MANU" >Priscillia Manu</option>
				<option value="MARVELOUS CYNTHIA" >Marvelous Cynthia</option>
				<option value="BRENT MADU" >Brent Madu</option>
				<option value="MOHAMMED DANJUMA" >Mohammed Danjuma</option>
				<option value="ETEBOR ITUMEN" >Etobor Itumen</option>
            </select>
        </div>
		<div class="form-group">
            <label>Candidate's Position</label>
            <select name="position" required>
                <option value="" selected disabled>Select Position</option>
				<option value="PRESIDENT" >PRESIDENT</option>
				<option value="VICE-PRESIDENT" >VICE-PRESIDENT</option>
				<option value="GOVERNOR" >GOVERNOR</option>
				<option value="DEPUTY-GOVERNOR" >DEPUTY-GOVERNOR</option>
				<option value="SECRETARY" >SECRETARY</option>
				<option value="ASSISTANT-SECRETARY" >ASSISTANT-SECRETARY</option>
            </select>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
