<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Search Results</title>
</head>
<body>
	<cfif isDefined ("form.keyword")>
		<!--- // KEYWORD SEARCH TO PERFORM THE QUERY // --->
		<cfquery name="qUsers" datasource="0902221">
			SELECT *
			FROM links
			WHERE url LIKE '%#form.keyword#%' OR description LIKE '%#form.keyword#%'
		</cfquery>

		<cfoutput query="qUsers">
			<p><a href="#qUsers.address#">#qUsers.address#</a></p>
			<p>The description of the links are: #qUsers.description#</p>
		</cfoutput>
	</cfif>
</body>
</html>