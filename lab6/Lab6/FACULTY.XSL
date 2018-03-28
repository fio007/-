<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <center><h2><xsl:value-of select="//@name"/></h2></center>
  <p><strong>Dean: </strong><xsl:value-of select="//dean"/></p>
  <p><strong>Address: </strong>
   <xsl:value-of select="//city"/>,
   <xsl:value-of select="//street"/>,
   <xsl:value-of select="//appt"/>
  </p>
  <p><strong>Phone: </strong><xsl:value-of select="//phone"/></p>
  <table border="1">
    <caption>Students</caption>
    <tr bgcolor="gray">
      <th>Fullname</th>
      <th>Age</th>
      <th>Average mark</th>
    </tr>
    <xsl:for-each select="//groups/group">
     <tr>
      <td colspan="3" align="center"><xsl:value-of select="@name"/></td>
     </tr>
     <xsl:for-each select="student">
      <tr>
        <td><xsl:value-of select="fullname"/></td>
        <td><xsl:value-of select="age"/></td>
        <td align="rigth"><xsl:value-of select="avg_mark"/></td>
      </tr>
     </xsl:for-each>
    </xsl:for-each>
  </table>
</xsl:template>
</xsl:stylesheet>

