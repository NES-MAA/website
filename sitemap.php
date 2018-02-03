
<script type="text/javascript">

sm = 0;

function hidediv(id) {
	//safe function to hide an element with a specified id
	if (document.getElementById) { // DOM3 = IE5, NS6
		document.getElementById(id).style.display = 'none';
	}
	else {
		if (document.layers) { // Netscape 4
			document.id.display = 'none';
		}
		else { // IE 4
			document.all.id.style.display = 'none';
		}
	}
}

function showdiv(id) {
	//safe function to show an element with a specified id

	if (document.getElementById) { // DOM3 = IE5, NS6
		document.getElementById(id).style.display = 'block';
	}
	else {
		if (document.layers) { // Netscape 4
			document.id.display = 'block';
		}
		else { // IE 4
			document.all.id.style.display = 'block';
		}
	}
}

function showhidesitemap() {
if (sm==0)
{
sm = 1;
showdiv('sitemap');
}
else
{
sm = 0;
hidediv('sitemap');
}

}

</script>

<BR clear=all>
<div class="sitemap">
	&nbsp;&nbsp;&nbsp;<A HREF="javascript:showhidesitemap()">Show / Hide Site Map</A>
	<div id=sitemap style="display:none;">
		<HR>
		<TABLE width="100%" cellspacing=2>
			<TR>
				<TD class="colheader">
					Home, News, Etc.
				</TD>
				<TD class="colheader">
					Governance
				</TD>
				<TD class="colheader">
					Meetings
				</TD>
				<TD class="colheader">
					Student Activities
				</TD>
				<TD  class="colheader">
					Section&nbsp;NExT
				</TD>
				<TD class="colheader">
					History
				</TD>
				<TD class="colheader">
					Awards
				</TD>
			</TR>
			<TR>
				<TD VALIGN="top">  <!--  Home News Etc. Start -->
					<UL class="sitemap">
						<li><A HREF="index.php">Home</A></li>
						<HR class="rightindent">
						<li><A HREF="news.php">Main News Page</A></li>
						<li><A HREF="newsletter.php">Current Newsletter</A></li>
						<li><A HREF="past_newsletters.php">Newsletter Archive</A></li>
						<HR class="rightindent">
						<li><A HREF="links.php">Links</A></li>
						<li><a href="search.php" class="dir">Search</a></li>
					</UL>
				</TD> <!--  Home News End -->
				<TD VALIGN="top">    <!--  Governance Start -->
					<UL class="sitemap">
						<li><A HREF="SectionOfficers.php">Section Officers</A></li>
						<li><A HREF="Bylaws.php">Section Bylaws</A></li>
						<li><A HREF="ReportsMinutes.php">Reports and Minutes</A></li>
						<li><A HREF="Forms.php">Forms</A></li>
						<li><A HREF="Guides.php">Guides</A></li>
					</UL>
				</TD>   <!--  Governance End -->
				<TD VALIGN="top">   <!--  Meetings Begin -->
					<ul class="sitemap">
						<li><A HREF="meetings.php">Next Section Meeting</A></li> <!-- Replace this with a link to the Google Sites page when a conference website is ready! -->
						<li><A HREF="FutureMeetings.php">Future Section Meetings</A></li>
						<li><A HREF="PastMeetings.php">Past Section Meetings</A></li>
						<li><A HREF="DinnerMeetings.php">Dinner Meetings</A></li>
						<li><A HREF="MiniCourses.php">Mini-Courses</A></li>
					</ul>
				</TD>   <!--  Meetings End -->
				<TD VALIGN="top">   <!--  Student Activities Begin -->
					<UL class="sitemap">
						<li><A HREF="Competitions.php">Competitions</A></li>
						<li><A HREF="StudentPaperSessions.php">Student Paper Sessions</A></li>
						<li><A HREF="StudentConferences.php">Student Conferences</A></li>
					</UL>
				</TD>   <!--  Student Activities End -->
				<TD VALIGN="top">   <!--  Section NExT Begin -->
					<UL class="sitemap">
						<li><A HREF="sectionnext.php">About Section NExT (New Experiences in Teaching)</A></li>
						<li><A HREF="NExTNews.php">Current Section NExT News</A></li>
						<li><A HREF="NExTpast.php">Previous Section NExT Meetings</A></li>
					</UL>
				</TD>   <!--  Section NExT End -->
				<TD VALIGN="top">   <!--  History Begin -->
					<UL class="sitemap">
						<li><A HREF="history.php">Introduction</A></li>
						<li><A HREF="ChristieBio.php">Dan Edwin Christie (1915-1975)</A></li>
						<li><A HREF="EvesBio.php">Howard Eves (1911-2004)</A></li>
						<li><A HREF="BattlesBio.php">Francis P. Battles (1941-2015)</A></li>
						<li><A HREF="Decades.php">History by Decade</A></li>
						<HR class="rightindent">
						<li><A HREF="BattlesLectures.php">Battles Lectures</A></li>
						<li><A HREF="ChristieLectures.php">Christie Lectures</A></li>
					</UL>
				</TD>   <!--  History End -->
				<TD VALIGN="top">   <!--  Awards Begin -->
					<UL class="sitemap">
						<li><A HREF="Awards.php">Main Awards Page</A></li>
						<li><A HREF="DistinguishedTeachingAward.php">Award for Distinguished College or University Teaching</A></li>
						<li><A HREF="EvesAward.php">Howard Eves Award</A></li>
						<li><A HREF="MeritoriousServiceAward.php">MAA Certificate for Meritorious Service</A></li>
						<li><A HREF="nominations.php">Nominate Someone</a></li>
					</UL>
				</TD>   <!--  Awards End -->
			</TR>
		</TABLE>
		<div class="ViewingSite">
			<h3 class="ESMC2">Viewing this Site</h3>
			<P>This site will be updated in the future to be more easily viewed on mobile devices. In the meantime, we ask your patience if text on the site appears as too large or too small.</P>
		</div>
	</div>
	<div class=copyright>
		<HR>
		Copyright &copy; 2017 - Northeastern Section of the Mathematical Association of America<BR>Please send comments, suggestions, or corrections for this page to the webmaster at  <A HREF='mailto:northeasternsection@gmail.com'>northeasternsection@gmail.com</A><BR>Last Modified:  09/7/2017 - 09:34am
	</div>
</div>